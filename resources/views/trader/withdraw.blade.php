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
        <h1 class="mt-3">Withdrawals</h1>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="row mt-4">
            <div class="col-12 col-lg-12 mb-4">
                @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Withdraw Fund</h5>
                        <form method="POST" action="{{ route('withdrawal.store') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="amount" class="form-label">Amount (USD)</label>
                                <input type="number" class="form-control" step="0.01" name="amount" id="amount" placeholder="Enter amount" required>
                                <input type="hidden" name="transaction_type" value="funding">
                            </div>
                            <div class="mb-3">
                                <label for="method" class="form-label">Choose a Method</label>
                                <select class="form-select" id="method" name="method" required>
                                    <option value="" disabled selected>Select method</option>
                                    <option value="btc">Bitcoin (BTC)</option>
                                    <option value="eth">Ethereum (ETH)</option>
                                    <option value="usdt">Tether (USDT)</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="amount" class="form-label">Wallet Address</label>
                                <input type="text" class="form-control" placeholder="Enter Wallet Adress" required>
                                {{-- <input type="hidden" name="transaction_type" value="withdrawal"> --}}
                            </div>
                            <button type="submit" class="btn btn-custom-primary">Withdraw</button>
                        </form>
                    </div>
                </div>
            </div>

            </div>
        </div>


        </div>
        </div>
    </div>
@endsection
