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
        <h1 class="mb-2 mb-md-0">Admin Dashboard</h1>
        {{-- <div>
            <a href="#" class="btn btn-custom-primary">Trade</a>
            <a href="#" class="btn btn-custom-primary">Fund Wallet</a>
            <a href="#" class="btn btn-custom-primary">Withdraw</a>
        </div> --}}
    </div>

    <div class="row">
        <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card d-flex flex-row justify-content-between align-items-center p-3">
                <div class="price"><b>Total Users</b>: {{ $userCount }}</div>
                <div>
                    <svg fill="#3b4b3b" width="50px" height="50px" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" stroke="#3b4b3b"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M25 3C24.8405 3 24.680156 3.0372812 24.535156 3.1132812L3.5351562 14.113281C3.2061563 14.286281 3 14.628 3 15L3 17C3 17.552 3.448 18 4 18L46 18C46.553 18 47 17.552 47 17L47 15C47 14.628 46.794844 14.286281 46.464844 14.113281L25.464844 3.1132812C25.319844 3.0372812 25.1595 3 25 3 z M 25 9C26.656 9 28 10.343 28 12C28 13.657 26.656 15 25 15C23.343 15 22 13.657 22 12C22 10.343 23.343 9 25 9 z M 8 20C7.448 20 7 20.448 7 21L7 35L13 35L13 21C13 20.448 12.552 20 12 20L8 20 z M 18 20C17.448 20 17 20.448 17 21L17 35L23 35L23 21C23 20.448 22.552 20 22 20L18 20 z M 28 20C27.448 20 27 20.448 27 21L27 35L32.853516 35C31.417516 33.807 30.5 32.009 30.5 30C30.5 27.925 31.481 26.077719 33 24.886719L33 21C33 20.448 32.552 20 32 20L28 20 z M 38 20C37.448 20 37 20.448 37 21L37 23.5C39.7 23.5 42.019 25.154906 43 27.503906L43 21C43 20.448 42.552 20 42 20L38 20 z M 37 25.5C34.519 25.5 32.5 27.519 32.5 30C32.5 32.481 34.519 34.5 37 34.5C39.481 34.5 41.5 32.481 41.5 30C41.5 27.519 39.481 25.5 37 25.5 z M 5 37C4.448 37 4 37.447 4 38L4 40L3 40C2.448 40 2 40.447 2 41L2 44C2 44.553 2.448 45 3 45L26 45L26 42.558594C26 40.351594 26.967422 38.381 28.482422 37L5 37 z M 33.558594 37C30.492594 37 28 39.492594 28 42.558594L28 47C28 47.553 28.447 48 29 48L45 48C45.553 48 46 47.553 46 47L46 42.558594C46 39.492594 43.506406 37 40.441406 37L33.558594 37 z"></path></g></svg>
                </div>
            </div>
        </div>


        <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card d-flex flex-row justify-content-between align-items-center p-3">
                <div class="price"><b>Total Approved Balance</b>: ${{ number_format($totalApprovedBalance, 2) }}</div>
                <div>
                    <svg fill="#3b4b3b" width="50px" height="50px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M22,7H19V4a1,1,0,0,0-1-1H2A1,1,0,0,0,1,4V16a1,1,0,0,0,1,1H5v3a1,1,0,0,0,1,1H22a1,1,0,0,0,1-1V8A1,1,0,0,0,22,7ZM3,15V5H17V15H3Zm18,4H7V17H18a1,1,0,0,0,1-1V9h2Zm-9-9a2,2,0,1,1-2-2A2,2,0,0,1,12,10ZM7,10a1,1,0,0,1-1,1H5A1,1,0,0,1,5,9H6A1,1,0,0,1,7,10Zm9,0a1,1,0,0,1-1,1H14a1,1,0,0,1,0-2h1A1,1,0,0,1,16,10Z"></path></g></svg>
                </div>
            </div>
        </div>
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
