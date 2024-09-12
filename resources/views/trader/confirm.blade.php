@extends('layouts.app')

@section('content')
<style>
    .marquee {
        overflow: hidden;
        white-space: nowrap;
        position: relative;
    }

    .marquee-content {
        display: inline-block;
        animation: marquee 25s linear infinite;
    }

    @keyframes marquee {
        0% { transform: translateX(100%); }
        100% { transform: translateX(-100%); }
    }
    .btn-custom-primary {
        background-color: white;
        border-color: #3b4b3b;
        color: #000;
    }

    .btn-custom-primary:hover {
        background-color: #3b4b3b;
        border-color: #fff;
        color: #fff;
    }
@media (max-width: 767px) {
    .card {
        margin-bottom: 50px;
    }
    .wallet-address-container {
        flex-direction: column;
        align-items: flex-start !important;
    }

    .wallet-address-container p {
        margin-bottom: 0.5rem !important;
        word-break: break-all;
    }
}
</style>

    <!-- Marquee Section -->
    <div class="marquee" style="background-color: #3b4b3b; color: white; padding: 10px 0;">
        <div class="marquee-content">
            @if(isset($cryptos['RAW']))
                @foreach($cryptos['RAW'] as $symbol => $data)
                    <span>{{ $symbol }}/USD: ${{ number_format($data['USD']['PRICE'], 2) }} &nbsp;&nbsp;&nbsp;</span>
                @endforeach
            @else
                <span>No data available.</span>
            @endif
        </div>
    </div>


    <div class="container-fluid">
        <h2 class="mt-3">Confirm Your Payment</h2>
        <div class="row mt-4">

           <!-- Main Transaction Details -->
            <div class="col-12 col-lg-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <p>Please complete your payment for the transaction below:</p>
                        <ul>
                            <li>Amount: ${{ $transaction->amount }}</li>
                            <li>Method: {{ strtoupper($transaction->method) }}</li>
                            <li>Status: {{ ucfirst($transaction->status) }}</li>
                            <li>Charge: ${{ $transaction->charge }}</li>
                        </ul>
                        <p>An email has been sent to {{ Auth::user()->email }} with payment details.</p>
                    </div>
                </div>
            </div>

            <!-- Wallet and Proof of Payment -->
            <div class="col-12 col-lg-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        @if($selectedWallet)
                        <div>
                            <h5><strong>Instructions</strong></h5>
                            <ol>
                                <li>Copy Company Wallet Address or Scan QR Code</li>
                                <li>Make Payment to the Wallet Address Below.</li>
                                <li>Upload Proof of Payment.</li>
                            </ol>

                            <div class="wallet-info">
                                <strong>Wallet Address:</strong>
                                <div class="d-flex align-items-center wallet-address-container">
                                    <p id="walletAddress">{{ $selectedWallet['address'] }}</p>
                                    <a class="mx-2 mb-3" style="color: blue; cursor: pointer; font-size: 16px" onclick="copyToClipboard()">Copy</a>
                                </div>
                                <strong>QR Code:</strong>
                                <img src="{{ asset($selectedWallet['qr']) }}" alt="{{ strtoupper($transaction->method) }} QR Code" style="width:150px;">
                            </div>
                        </div>
                        @endif

                        <!-- Proof of Payment Form -->
                        <form action="{{ route('trader.fund.upload_proof', $transaction->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{$transaction->id}}
                            <div class="mb-3">
                                <label for="proof_of_payment" class="form-label">Upload Proof of Payment</label>
                                <input type="file" name="proof_of_payment" id="proof_of_payment" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit Proof</button>
                        </form>

                        <p><strong>Note:</strong> Payment will be confirmed once it is verified.</p>
                    </div>
                </div>
            </div>

            <!-- Transaction History -->
            <div class="col-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Transaction Histories</h5>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Amount</th>
                                        <th>Method</th>
                                        <th>Status</th>
                                        <th>Charge</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($confirm_transactions as $confirm_transaction)
                                        <tr>
                                            <td>${{ number_format($confirm_transaction->amount, 2) }}</td>
                                            <td>{{ strtoupper($confirm_transaction->method) }}</td>
                                            <td>
                                                @if($confirm_transaction->status == 'pending')
                                                    <span class="badge bg-warning text-dark">PENDING</span>
                                                @elseif($confirm_transaction->status == 'requested')
                                                    <span class="badge bg-info text-dark">REQUESTED</span>
                                                @elseif($confirm_transaction->status == 'approved')
                                                    <span class="badge bg-success text-white">APPROVED</span>
                                                @endif
                                            </td>
                                            <td>${{ number_format($confirm_transaction->charge, 2) }}</td>
                                            <td>{{ $confirm_transaction->transaction_date }}</td>
                                            <td>
                                                <a href="{{ route('trader.fund.confirm', $confirm_transaction->id) }}" class="btn btn-custom-primary btn-sm">View</a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5">No transactions found.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            </div>
        </div>

    </div>
@endsection

<script>
     function copyToClipboard() {
        // Get the wallet address text
        const walletAddress = document.getElementById('walletAddress').innerText;

        // Create a temporary textarea element to hold the text
        const tempInput = document.createElement('textarea');
        tempInput.value = walletAddress;
        document.body.appendChild(tempInput);
        tempInput.select();
        document.execCommand('copy');
        document.body.removeChild(tempInput);

        // Show alert after copying
        alert('Wallet address copied to clipboard: ' + walletAddress);
    }
</script>
