@extends('layouts.admin')

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
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mb-3 mt-3">
        <h1 class="mb-2 mb-md-0">Transactions</h1>
    </div>

    <div class="row mt-4">
        <div class="col-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Transaction Histories</h5>
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>User</th>
                                    <th>Amount</th>
                                    <th>Method</th>
                                    <th>Status</th>
                                    <th>Proof of Payment</th>
                                    <th>Type</th>
                                    <th>Charge</th>
                                    <th>Date</th>

                                </tr>
                            </thead>
                            <tbody>
                                @forelse($allTransactions as $transaction)
                                <tr>
                                    <td>{{ $transaction->id }}</td>
                                    <td>{{ $transaction->user->name }}</td>
                                    <td>${{ number_format($transaction->amount, 2) }}</td>
                                    <td>{{ strtoupper($transaction->method) }}</td>
                                    <td>
                                    <span class="badge" style="background-color:
                                        {{ $transaction->status == 'pending' ? '#FFC107' :
                                        ($transaction->status == 'requested' ? '#0DCAF0' :
                                        ($transaction->status == 'approved' ? '#198754' :
                                        ($transaction->status == 'rejected' ? '#DC3545' : 'gray')))
                                        }}">
                                        {{ ucfirst($transaction->status) }}
                                    </span>
                                    <td>
                                        @if($transaction->transaction_type == 'funding')
                                             @if($transaction->proof_of_payment)
                                             <a href="{{ asset('storage/' . $transaction->proof_of_payment) }}" target="_blank">View Proof</a>
                                             @endif
                                        @endif
                                    </td>
                                    </td>
                                    <td>{{ ucfirst($transaction->transaction_type) }}</td>
                                    <td>${{ number_format($transaction->charge, 2) }}</td>
                                    <td>{{ $transaction->transaction_date }}</td>
                                    <td>
                                        @if($transaction->transaction_type == 'funding')
                                        <form action="{{ route('admin.transactions.approve', $transaction->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @if($transaction->status == 'approved')
                                            <a href="javascript:void(0);" class="btn btn-custom-primary btn-sm">Approved</a>
                                            @else
                                            <button class="btn btn-custom-primary btn-sm">Approve</button>
                                            @endif
                                        </form>
                                        @endif

                                        @if($transaction->transaction_type == 'withdrawal')
                                            <td>
                                              @if($transaction->status == 'approved')
                                                    <span class="btn btn-custom-primary btn-sm">Approved</span>
                                                @elseif($transaction->status == 'rejected')
                                                    <span class="btn btn-danger btn-sm">Rejected</span>
                                                @else
                                                    <div class="d-flex">
                                                        <form action="{{ route('admin.withdrawals.approve', $transaction->id) }}" method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('PUT')
                                                            <button class="btn btn-custom-primary btn-sm">Approve</button>
                                                        </form>&nbsp;
                                                        <form action="{{ route('admin.withdrawals.reject', $transaction->id) }}" method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('PUT')
                                                            <button class="btn btn-danger btn-sm">Reject</button>
                                                        </form>
                                                    </div>
                                                @endif
                                            </td>
                                         @endif
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="9">No pending transactions.</td>
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
@endsection
