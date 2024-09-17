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
    <h1 class="mt-3">User Details</h1>

    <!-- User Info -->
    <div class="row my-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">User Information</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Name:</strong> {{ $user->name }}</li>
                        <li class="list-group-item"><strong>Email:</strong> {{ $user->email }}</li>
                        <li class="list-group-item"><strong>Balance:</strong> ${{ number_format($user->balance, 2) }}</li>
                        <li class="list-group-item"><strong>Joined:</strong> {{ $user->created_at->format('Y-m-d') }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Transactions Info -->
    <div class="row my-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $user->name }}, Transactions</h5>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Amount</th>
                                    <th>Method</th>
                                    <th>Status</th>
                                    <th>Type</th>
                                    <th>Charge</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($transactions as $transaction)
                                    <tr>
                                        <td>{{ $transaction->id }}</td>
                                        <td>${{ number_format($transaction->amount, 2) }}</td>
                                        <td>{{ strtoupper($transaction->method) }}</td>
                                        <td>
                                            @if($transaction->status == 'pending')
                                                <span class="badge bg-warning">PENDING</span>
                                            @elseif($transaction->status == 'approved')
                                                <span class="badge bg-success">APPROVED</span>
                                            @elseif($transaction->status == 'rejected')
                                                <span class="badge bg-danger">REJECTED</span>
                                            @endif
                                        </td>
                                        <td>{{ ucfirst($transaction->transaction_type) }}</td>
                                        <td>${{ number_format($transaction->charge, 2) }}</td>
                                        <td>{{ $transaction->transaction_date }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7">No transactions found for this user.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="col-12 mt-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Investment Details</h5>
                    <form action="{{ route('admin.user.update_investment', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="invested_amount">Invested Amount</label>
                            <input type="number" step="0.01" name="invested_amount" value="{{ old('invested_amount', $user->invested_amount) }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="profit">Profit</label>
                            <input type="number" step="0.01" name="profit" value="{{ old('profit', $user->profit) }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="bonus">Bonus</label>
                            <input type="number" step="0.01" name="bonus" value="{{ old('bonus', $user->bonus) }}" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-custom-primary mt-3">Update Investment Details</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
