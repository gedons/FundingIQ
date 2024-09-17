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
        <h1 class="mb-2 mb-md-0">User Kyc</h1>
    </div>

    <div class="row mt-4">
        <div class="col-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Kyc Requests</h5>
                        @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif

                        @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>KYC Document</th>
                                    <th>KYC Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            <a href="{{ asset('storage/' . $user->kyc_document) }}" target="_blank">View Document</a>
                                        </td>
                                        <td>
                                            @if($user->kyc_status == 'pending')
                                                <span class="badge bg-warning">Pending</span>
                                            @elseif($user->kyc_status == 'approved')
                                                <span class="badge bg-success">Approved</span>
                                            @elseif($user->kyc_status == 'rejected')
                                                <span class="badge bg-danger">Rejected</span>
                                            @endif
                                        </td>
                                        <td>
                                            <form action="{{ route('admin.kyc.approve', $user->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                <button type="submit" class="btn btn-success">Approve</button>
                                            </form>
                                            <form action="{{ route('admin.kyc.reject', $user->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                <button type="submit" class="btn btn-danger">Reject</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
