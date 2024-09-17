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
        <h1 class="mt-3">Upload ID (KYC)</h1>

        <div class="row mt-4">
             <div class="col-12 col-lg-12">
                 <div class="card">
                     <div class="card-body">
                        <div>
                            <h5><strong>IDENTITY VERIFICATION</strong></h5>
                            <h6>Upload images of an ID Document(s) specified below</h6>
                            <ol>
                                <li>Driver's License</li>
                                <li>Passport</li>
                                <li>National Identity Card</li>
                            </ol>
                            <h6>Tip: Use clear and colored images with good lighting</h6>
                        </div>
                     </div>
                 </div>
             </div>
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
             <div class="col-12 col-lg-12 mt-3">
                <div class="card">
                    <div class="card-body">

                        @if(Auth::user()->kyc_status == 'approved')
                        <p class="text-success">KYC Approved</p>
                        @elseif(Auth::user()->kyc_status == 'pending')
                            <p class="text-warning">KYC Pending</p>
                        @elseif(Auth::user()->kyc_status == 'rejected')
                            <p class="text-danger">KYC Rejected</p>
                        @endif

                        @if(auth()->user()->kyc_status !== 'approved')
                        <form action="{{ route('trader.profile.upload.kyc') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="kyc_document">Upload KYC Document (ID, Passport, etc.)</label>
                                <input type="file" name="kyc_document" id="kyc_document" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-custom-primary">Submit KYC Document</button>
                        </form>
                        @else
                            <p>Your KYC has been approved. No further action is required.</p>
                        @endif

                    </div>
                </div>
             </div>
        </div>
    </div>
    @endsection
