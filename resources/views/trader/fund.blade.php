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
        <h1 class="mt-3">Fund Account</h1>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="row mt-4">
            <div class="col-12 col-lg-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Fund Your Account</h5>
                        <form method="POST" action="{{ route('trader.fund.store') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="amount" class="form-label">Amount (USD)</label>
                                <input type="number" class="form-control" step="0.01" name="amount" id="amount" placeholder="Enter amount" required>
                            </div>
                            <div class="mb-3">
                                <label for="method" class="form-label">Choose a Payment Method</label>
                                <select class="form-select" id="method" name="method" required>
                                    <option value="" disabled selected>Select payment method</option>
                                    <option value="btc">Bitcoin (BTC)</option>
                                    <option value="eth">Ethereum (ETH)</option>
                                    <option value="usdt">Tether (USDT)</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-custom-primary">Fund</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-8 mb-4">
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
                                    @forelse($transactions as $transaction)
                                    <tr>
                                        <td>${{ number_format($transaction->amount, 2) }}</td>
                                        <td>{{ strtoupper($transaction->method) }}</td>
                                        <td>
                                            @if($transaction->status == 'pending')
                                                <span class="badge bg-warning text-dark">PENDING</span>
                                            @elseif($transaction->status == 'requested')
                                                <span class="badge bg-info text-dark">REQUESTED</span>
                                            @elseif($transaction->status == 'approved')
                                                <span class="badge bg-success text-white">APPROVED</span>
                                            @endif
                                        </td>
                                        <td>${{ number_format($transaction->charge, 2) }}</td>
                                        <td>{{ $transaction->transaction_date }}</td>

                                        @if($transaction->status == 'requested')
                                        <td>
                                            <a href="javascript:void(0);" class="btn btn-custom-primary btn-sm">Requested</a>
                                            </td>
                                        @elseif($transaction->status == 'pending')
                                            <td>
                                                <a href="{{ route('trader.fund.confirm', $transaction->id) }}" class="btn btn-custom-primary btn-sm">View</a>
                                            </td>
                                        @else
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-custom-primary btn-sm">Approved</a>
                                            </td>
                                        @endif
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="6">No transactions found.</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div> <!-- End of table-responsive -->
                    </div>
                </div>
            </div>
            </div>
        </div>


        </div>
        </div>
    </div>
@endsection
