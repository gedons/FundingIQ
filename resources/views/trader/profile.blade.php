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
            <h1 class="mt-3">Profile</h1>

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

            <div class="row mt-4">
                <div class="col-12 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Update Name and Email</h5>
                            <form action="{{ route('trader.profile.update.details') }}" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $trader->name) }}" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $trader->email) }}" required>
                                </div>

                                <button type="submit" class="btn btn-custom-primary">Update Details</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Update Password</h5>
                            <form action="{{ route('trader.profile.update.password') }}" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="password">New Password</label>
                                    <input type="password" name="password" id="password" class="form-control" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="password_confirmation">Confirm Password</label>
                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
                                </div>

                                <button type="submit" class="btn btn-custom-primary">Update Password</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection
