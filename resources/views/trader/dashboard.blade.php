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
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mb-3 mt-3">
                <h1 class="mb-2 mb-md-0">Dashboard</h1>
                <div>
                    {{-- <a href="{{route('trader.trade')}}" class="btn btn-custom-primary">Trade</a> --}}
                    <a href="{{ route('trader.fund') }}" class="btn btn-custom-primary">Fund Wallet</a>
                    <a href="{{ route('trader.withdraw') }}" class="btn btn-custom-primary">Withdraw</a>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="card d-flex flex-row justify-content-between align-items-center p-3">
                        <div class="price"><b>Invested</b>: $ {{ number_format($user->invested_amount, 2) }}</div>
                        <div>
                            <svg fill="#3b4b3b" width="50px" height="50px" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" stroke="#3b4b3b"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M25 3C24.8405 3 24.680156 3.0372812 24.535156 3.1132812L3.5351562 14.113281C3.2061563 14.286281 3 14.628 3 15L3 17C3 17.552 3.448 18 4 18L46 18C46.553 18 47 17.552 47 17L47 15C47 14.628 46.794844 14.286281 46.464844 14.113281L25.464844 3.1132812C25.319844 3.0372812 25.1595 3 25 3 z M 25 9C26.656 9 28 10.343 28 12C28 13.657 26.656 15 25 15C23.343 15 22 13.657 22 12C22 10.343 23.343 9 25 9 z M 8 20C7.448 20 7 20.448 7 21L7 35L13 35L13 21C13 20.448 12.552 20 12 20L8 20 z M 18 20C17.448 20 17 20.448 17 21L17 35L23 35L23 21C23 20.448 22.552 20 22 20L18 20 z M 28 20C27.448 20 27 20.448 27 21L27 35L32.853516 35C31.417516 33.807 30.5 32.009 30.5 30C30.5 27.925 31.481 26.077719 33 24.886719L33 21C33 20.448 32.552 20 32 20L28 20 z M 38 20C37.448 20 37 20.448 37 21L37 23.5C39.7 23.5 42.019 25.154906 43 27.503906L43 21C43 20.448 42.552 20 42 20L38 20 z M 37 25.5C34.519 25.5 32.5 27.519 32.5 30C32.5 32.481 34.519 34.5 37 34.5C39.481 34.5 41.5 32.481 41.5 30C41.5 27.519 39.481 25.5 37 25.5 z M 5 37C4.448 37 4 37.447 4 38L4 40L3 40C2.448 40 2 40.447 2 41L2 44C2 44.553 2.448 45 3 45L26 45L26 42.558594C26 40.351594 26.967422 38.381 28.482422 37L5 37 z M 33.558594 37C30.492594 37 28 39.492594 28 42.558594L28 47C28 47.553 28.447 48 29 48L45 48C45.553 48 46 47.553 46 47L46 42.558594C46 39.492594 43.506406 37 40.441406 37L33.558594 37 z"></path></g></svg>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="card d-flex flex-row justify-content-between align-items-center p-3">
                        <div class="price"><b>Profit</b>: $ {{ number_format($user->profit, 2) }}</div>
                        <div>
                            <svg width="50px" height="50px" viewBox="0 0 512 512" id="svg2793" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:serif="http://www.serif.com/" xmlns:svg="http://www.w3.org/2000/svg" fill="#3b4b3b" stroke="#3b4b3b"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <defs id="defs2797"></defs> <g id="_03-Profit" style="display:inline" transform="translate(-2048,7.53847e-4)"> <g id="g2756" transform="translate(2132.93,29.6336)"> <path d="m 0,166.206 c 1.848,0 3.727,-0.344 5.548,-1.069 L 245.19,69.65 234.235,95.126 c -3.272,7.61 0.244,16.433 7.855,19.706 1.931,0.83 3.941,1.224 5.919,1.224 5.812,0 11.345,-3.4 13.787,-9.079 l 25.26,-58.739 c 0.019,-0.046 0.032,-0.092 0.05,-0.137 0.172,-0.41 0.33,-0.825 0.464,-1.249 0.073,-0.226 0.123,-0.455 0.184,-0.682 0.065,-0.245 0.139,-0.487 0.191,-0.735 0.056,-0.26 0.09,-0.521 0.132,-0.781 0.035,-0.222 0.078,-0.443 0.104,-0.668 0.029,-0.258 0.039,-0.515 0.054,-0.773 0.014,-0.233 0.036,-0.463 0.038,-0.696 0.003,-0.246 -0.012,-0.488 -0.02,-0.732 -0.009,-0.246 -0.012,-0.492 -0.032,-0.739 -0.021,-0.239 -0.06,-0.475 -0.091,-0.711 -0.033,-0.248 -0.059,-0.496 -0.106,-0.744 -0.048,-0.267 -0.119,-0.53 -0.183,-0.793 -0.051,-0.212 -0.092,-0.425 -0.153,-0.636 -0.136,-0.475 -0.294,-0.941 -0.478,-1.4 V 36.76 c -0.183,-0.459 -0.391,-0.908 -0.617,-1.348 -0.104,-0.2 -0.224,-0.387 -0.335,-0.581 -0.132,-0.229 -0.258,-0.463 -0.403,-0.686 -0.141,-0.219 -0.298,-0.423 -0.451,-0.633 -0.134,-0.186 -0.262,-0.376 -0.406,-0.557 -0.161,-0.201 -0.335,-0.389 -0.506,-0.582 -0.155,-0.174 -0.304,-0.354 -0.467,-0.521 -0.171,-0.176 -0.354,-0.337 -0.534,-0.504 -0.179,-0.167 -0.353,-0.339 -0.543,-0.498 -0.185,-0.157 -0.381,-0.297 -0.574,-0.444 -0.196,-0.15 -0.387,-0.305 -0.592,-0.447 -0.23,-0.158 -0.471,-0.297 -0.71,-0.442 -0.179,-0.11 -0.352,-0.227 -0.538,-0.33 -0.434,-0.24 -0.88,-0.46 -1.336,-0.656 L 220.461,3.272 C 212.854,0 204.028,3.516 200.755,11.126 c -3.273,7.61 0.244,16.433 7.854,19.706 l 25.468,10.952 -239.634,95.484 c -7.695,3.066 -11.448,11.791 -8.382,19.487 2.341,5.874 7.979,9.451 13.939,9.451" id="path2754" style="fill-rule:nonzero"></path> </g> <g id="g2760" transform="translate(2078,242.827)"> <path d="m 0,104.978 c 0,-9.826 7.994,-17.819 17.82,-17.819 9.826,0 17.82,7.993 17.82,17.819 V 207.489 H 0 Z M 138.79,41.869 c 0,-4.77 1.85,-9.243 5.225,-12.613 3.353,-3.358 7.826,-5.208 12.595,-5.208 4.763,0 9.232,1.85 12.602,5.226 3.365,3.359 5.218,7.832 5.218,12.595 v 165.62 h -35.64 z m 138.78,-52.88 c 0,-9.826 7.994,-17.821 17.82,-17.821 9.826,0 17.82,7.995 17.82,17.821 v 218.5 h -35.64 z m 138.79,-73.681 c 0,-9.826 7.994,-17.819 17.82,-17.819 9.826,0 17.82,7.993 17.82,17.819 v 292.181 h -35.64 z m 17.82,-47.819 c -26.368,0 -47.82,21.452 -47.82,47.819 v 292.181 h -43.15 v -218.5 c 0,-26.368 -21.452,-47.821 -47.82,-47.821 -26.368,0 -47.82,21.453 -47.82,47.821 v 218.5 H 204.43 V 41.869 c 0,-12.786 -4.98,-24.799 -14.005,-33.808 -9.02,-9.036 -21.029,-14.013 -33.815,-14.013 -12.792,0 -24.805,4.977 -33.808,13.995 -9.036,9.022 -14.012,21.035 -14.012,33.826 v 165.62 H 65.64 V 104.978 C 65.64,78.611 44.188,57.159 17.82,57.159 -8.548,57.159 -30,78.611 -30,104.978 v 117.511 c 0,8.284 6.716,15 15,15 h 482 c 8.284,0 15,-6.716 15,-15 V -84.692 c 0,-26.367 -21.452,-47.819 -47.82,-47.819" id="path2758" style="fill-rule:nonzero"></path> </g> </g> </g></svg>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="card d-flex flex-row justify-content-between align-items-center p-3">
                        <div class="price"><b>Bonus</b>: $ {{ number_format($user->bonus, 2) }}</div>
                        <div>
                            <svg fill="#3b4b3b" width="50px" height="50px" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M145.408 92.16v147.456c0 11.311 9.169 20.48 20.48 20.48s20.48-9.169 20.48-20.48V92.16c0-11.311-9.169-20.48-20.48-20.48s-20.48 9.169-20.48 20.48z"></path><path d="M92.16 186.368h147.456c11.311 0 20.48-9.169 20.48-20.48s-9.169-20.48-20.48-20.48H92.16c-11.311 0-20.48 9.169-20.48 20.48s9.169 20.48 20.48 20.48zm744.375 210.043v147.456c0 11.311 9.169 20.48 20.48 20.48s20.48-9.169 20.48-20.48V396.411c0-11.311-9.169-20.48-20.48-20.48s-20.48 9.169-20.48 20.48z"></path><path d="M783.287 490.619h147.456c11.311 0 20.48-9.169 20.48-20.48s-9.169-20.48-20.48-20.48H783.287c-11.311 0-20.48 9.169-20.48 20.48s9.169 20.48 20.48 20.48zM243.712 269.261v102.502c0 11.311 9.169 20.48 20.48 20.48s20.48-9.169 20.48-20.48V269.261c0-11.311-9.169-20.48-20.48-20.48s-20.48 9.169-20.48 20.48z"></path><path d="M212.941 340.992h102.502c11.311 0 20.48-9.169 20.48-20.48s-9.169-20.48-20.48-20.48H212.941c-11.311 0-20.48 9.169-20.48 20.48s9.169 20.48 20.48 20.48zm262.712 93.874l-55.951-110.111c-3.461-6.812 1.488-14.879 9.124-14.879h168.202c7.646 0 12.595 8.066 9.133 14.88l-55.95 110.109c-5.124 10.084-1.103 22.412 8.98 27.536s22.412 1.103 27.536-8.98l55.951-110.111c17.306-34.066-7.442-74.394-45.65-74.394H428.826c-38.201 0-62.944 40.331-45.641 74.392l55.952 110.112c5.124 10.084 17.452 14.104 27.536 8.98s14.104-17.452 8.98-27.536z"></path><path d="M678.482 908.305c73.722 0 133.478-59.756 133.478-133.478v-39.393c0-145.341-119.005-264.346-264.346-264.346h-69.376c-145.339 0-264.335 119.003-264.335 264.346v39.393c0 73.722 59.756 133.478 133.478 133.478h331.1zm0 40.96h-331.1c-96.344 0-174.438-78.095-174.438-174.438v-39.393c0-167.964 137.335-305.306 305.295-305.306h69.376c167.962 0 305.306 137.343 305.306 305.306v39.393c0 96.344-78.095 174.438-174.438 174.438z"></path></g></svg>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="card d-flex flex-row justify-content-between align-items-center p-3">
                        <div class="price"><b>Balance</b>: ${{ number_format(Auth::user()->balance, 2) }}</div>
                        <div>
                            <svg fill="#3b4b3b" width="50px" height="50px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M22,7H19V4a1,1,0,0,0-1-1H2A1,1,0,0,0,1,4V16a1,1,0,0,0,1,1H5v3a1,1,0,0,0,1,1H22a1,1,0,0,0,1-1V8A1,1,0,0,0,22,7ZM3,15V5H17V15H3Zm18,4H7V17H18a1,1,0,0,0,1-1V9h2Zm-9-9a2,2,0,1,1-2-2A2,2,0,0,1,12,10ZM7,10a1,1,0,0,1-1,1H5A1,1,0,0,1,5,9H6A1,1,0,0,1,7,10Zm9,0a1,1,0,0,1-1,1H14a1,1,0,0,1,0-2h1A1,1,0,0,1,16,10Z"></path></g></svg>
                        </div>
                    </div>
                </div>

                {{-- <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="card d-flex flex-row justify-content-between align-items-center p-3">
                        <div class="price"><b>Stake Profit</b>: $5000</div>
                        <div>
                           <svg fill="#3b4b3b" height="50px" width="50px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" stroke="#3b4b3b"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Profit"> <path d="M32.8869896,19.6364498c0-0.4902992-0.3974991-0.8876991-0.8876991-0.8876991s-0.8876991,0.3973999-0.8876991,0.8876991 c0,0.9505005,0.5403004,2.4869995,3.8876991,2.7425995V24.53195c0,0.5527,0.4473,1,1,1s1-0.4473,1-1v-2.1742992 c2.4820023-0.2922001,3.8876991-1.7041016,3.8876991-3.9839001c0-1.6809006-0.7114983-3.6493006-3.8876991-3.9885006v-3.8964005 c0.7468987,0.1136007,1.0988998,0.3435001,1.2528992,0.4981003c0.1786995,0.1787996,0.1934013,0.3466997,0.1944008,0.3818998 c-0.0312996,0.4736004,0.3174019,0.8916006,0.7938995,0.9414005c0.4971008,0.0448999,0.9238014-0.3037004,0.9746017-0.7910004 c0.0098-0.0928001,0.0741997-0.9258003-0.6132927-1.6884995c-0.558609-0.6194-1.4387093-0.9893007-2.6025085-1.1229V6.53195 c0-0.5528002-0.4473-1-1-1s-1,0.4471998-1,1v2.1612997c-3.4119987,0.3158998-3.8876991,2.2707005-3.8876991,3.9969006 c0,2.0171995,1.3117981,3.1429996,3.8876991,3.3669004v4.5409985 C33.8845901,20.4961491,32.8869896,20.2100506,32.8869896,19.6364498z M39.1115913,18.3737507 c0,0.5457001-0.0017929,1.8843994-2.1123009,2.2014999v-4.4084015 C38.4936905,16.3527508,39.1115913,17.0144501,39.1115913,18.3737507z M32.8869896,12.6901503 c0-0.9806004,0.0017014-1.9900007,2.1123009-2.2209005v3.8146C32.8886909,14.0763502,32.8869896,13.1928501,32.8869896,12.6901503z "></path> <path d="M60.9865913,39.0680504c-0.8809013-1.285202-2.4766006-2.6436005-4.0889015-2.2285004 c-1.7578011,0.4511986-3.333889,2.2187004-5.1590996,4.2645988c-2.1620979,2.4239006-4.6114006,5.1709023-7.6835976,6.0625 c-5.9785004,1.7344017-13.5049019,0.472702-15.847702,0.0020027c-0.25-0.3994026-0.1973-1.6914024,0.0321999-1.9395027 c0.5098-0.1854973,1.7119999-0.0467987,2.9794998,0.1006012c2.1807022,0.2519989,5.1690025,0.5976982,8.5684013-0.0576019 c0.7645988-0.1464996,1.5713005-0.8778992,1.5458984-2.4921989c-0.0351982-2.142601-1.6503983-5.4081993-5.1338005-5.9598999 c-1.6591988-0.2626991-6.0653992-0.961998-11.9550991-1.3008003c-2.3534985-0.1455002-6.2313995,2.8281021-7.5311985,3.8672028 H2.9992919c-0.561492,0-1.0176001,0.4559975-1.0176001,1.017498v12.8974991c0,0.5615005,0.4561081,1.017601,1.0176001,1.017601 h10.1669998c1.5205088,1.1826019,8.6181993,6.5722008,13.143508,7.7080002 c2.9658928,0.7440987,6.7177925,1.5243988,10.4746933,1.5243988c2.7645988,0,5.5321999-0.4228973,7.9911995-1.5928001 c5.8671989-2.7929001,12.2587967-11.947197,15.6923981-16.8652c0.4062004-0.5800972,0.7635994-1.0937996,1.0672989-1.5175972 C62.4914894,42.2389488,61.8791885,40.3707504,60.9865913,39.0680504z M4.016892,41.4215508h7.8887v10.8623009h-7.8887V41.4215508z M59.8810921,42.3922501c-0.3076019,0.4296989-0.6699028,0.9491997-1.0800018,1.5371017 c-3.089901,4.4238968-9.5186005,13.6308975-14.899498,16.1933975c-5.2089005,2.4746017-12.2519016,1.1464996-17.0966015-0.0683975 c-4.5557003-1.1435013-12.5742989-7.485302-12.6542988-7.5488014c-0.0174007-0.0139008-0.0395002-0.0191994-0.0576-0.0318985 V41.4215508h2.9804001c0.2353992,0,0.4638996-0.0820007,0.6455002-0.2313995 c1.8925991-1.5547028,5.1338081-3.6690025,6.4081993-3.6397018c5.7880993,0.3330002,10.1220989,1.0205002,11.7539005,1.2793007 c1.8467064,0.2919998,2.7061005,1.6641006,3.0537071,2.4561005c0.4218903,0.9608994,0.4023933,1.7383003,0.3124924,2.017601 c-3.030201,0.5584984-5.6669006,0.2509003-7.7949009,0.0057983c-1.7108994-0.1973-2.9442997-0.3408012-3.9071999,0.0078011 c-1.1845989,0.4306984-1.6142998,1.9921989-1.5145988,3.3495979c0.1005001,1.357502,0.7206993,2.2823029,1.6590996,2.4737015 c2.3232994,0.4735985,10.4111996,1.8719978,16.9316998-0.0205002c3.6347008-1.0537987,6.4071999-4.1631012,8.6347008-6.6612015 c1.5370979-1.7235985,2.9892998-3.3514977,4.1464996-3.6483994c0.3417969-0.0849991,1.1865005,0.3563995,1.9053001,1.4071999 C59.9601898,41.169651,60.1105919,42.0709496,59.8810921,42.3922501z"></path> <path d="M35.9992905,30.4485493c8.2843018,0,15-6.7157001,15-14.999999c0-8.2842007-6.7156982-15-15-15s-15,6.7158003-15,15 C20.9992905,23.7328491,27.7149906,30.4485493,35.9992905,30.4485493z M35.9992905,2.44855c7.1682014,0,13,5.8317995,13,13 c0,7.1682997-5.8317986,12.999999-13,12.999999s-13-5.8316994-13-12.999999 C22.9992905,8.2803497,28.8310909,2.44855,35.9992905,2.44855z"></path> </g> </g></svg>
                        </div>
                    </div>
                </div> --}}
            </div>

            <div>
                <div class="col-12 col-lg-12">
                    <div class="card">
                        @if (session('success'))
                            <div class="alert alert-success">
                            {{ session('success') }}
                            </div>
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">Transaction Histories</h5>
                           <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Amount</th>
                                        <th>Method</th>
                                        <th>Type</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($withdrawals as $withdrawal)
                                        <tr>
                                            <td>${{ number_format($withdrawal->amount, 2) }}</td>
                                            <td>{{ strtoupper($withdrawal->method) }}</td>
                                            <td>{{ ucfirst($withdrawal->transaction_type) }}</td>
                                            <td>{{ $withdrawal->transaction_date }}</td>
                                            <td>
                                                @if($withdrawal->status == 'requested')
                                                    <a href="javascript:void(0);" class="btn btn-custom-primary btn-sm">Requested</a>
                                                @elseif($withdrawal->status == 'pending')
                                                    @if($withdrawal->transaction_type != 'withdrawal')
                                                        <a href="{{ route('trader.fund.confirm', $withdrawal->id) }}" class="btn btn-custom-primary btn-sm">View</a>
                                                    @endif
                                                @elseif($withdrawal->status == 'rejected')
                                                   <a href="javascript:void(0);" class="btn btn-custom-primary btn-sm">Rejected</a>
                                                @else
                                                    <a href="javascript:void(0);" class="btn btn-custom-primary btn-sm">Approved</a>
                                                @endif
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4">No withdrawal history found.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                           </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-sm-12 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Trading View Chart</h5>
                             <!-- TradingView Widget BEGIN -->
                            <div class="tradingview-widget-container" style="height:100%;width:100%">
                                <div class="tradingview-widget-container__widget" style="height:calc(100% - 32px);width:100%"></div>
                                <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on TradingView</span></a></div>
                                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js" async>
                                {
                                "width": "984",
                                "height": "400",
                                "symbol": "NASDAQ:AAPL",
                                "interval": "D",
                                "timezone": "Etc/UTC",
                                "theme": "dark",
                                "style": "1",
                                "locale": "en",
                                "allow_symbol_change": true,
                                "calendar": false,
                                "support_host": "https://www.tradingview.com"
                            }
                                </script>
                            </div>
                            <!-- TradingView Widget END -->

                        </div>
                    </div>
                </div>
            </div>

        </div>


@endsection

