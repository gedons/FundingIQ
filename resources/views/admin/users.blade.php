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
        <h1 class="mb-2 mb-md-0">Users</h1>
    </div>

    <div class="row mt-4">
        <div class="col-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">All Users</h5>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Balance</th>
                                    <th>Joined</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                        </thead>
                        <tbody>
                            @forelse($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>${{ number_format($user->balance, 2) }}</td>
                                    <td>{{ $user->created_at->format('Y-m-d') }}</td>
                                    <td>
                                        <!-- Example of actions like view, edit, delete, etc. -->
                                        <a href="{{ route('admin.users.show', $user->id) }}" class="btn btn-sm btn-custom-primary">View</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6">No users found.</td>
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
