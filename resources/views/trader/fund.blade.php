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

        <div class="row mt-4">
            <!-- Left Card: Fund Account Form -->
            <div class="col-12 col-lg-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Fund Your Account</h5>
                        <form>
                            <div class="mb-3">
                                <label for="amount" class="form-label">Amount (USD)</label>
                                <input type="number" class="form-control" id="amount" placeholder="Enter amount" required>
                            </div>
                            <div class="mb-3">
                                <label for="paymentMethod" class="form-label">Choose a Payment Method</label>
                                <select class="form-select" id="paymentMethod" required>
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

            <!-- Right Card: Transaction Histories -->
            <div class="col-12 col-lg-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Transaction Histories</h5>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Amount</th>
                                    <th>Method</th>
                                    <th>Status</th>
                                    <th>Charge</th>
                                    <th>Transaction Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>$1000.00</td>
                                    <td>Bitcoin (BTC)</td>
                                    <td><span class="badge bg-warning text-dark">PENDING</span></td>
                                    <td>$100.00</td>
                                    <td>2024-09-11 11:10:34</td>
                                </tr>
                                <!-- Add more transaction history items here -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
