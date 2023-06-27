<html>
@include('layouts._include.header')

<body>
    <div class="sticky-top shadow-sm">
        <!-- Top Nav -->
        <div class="container-fluid bg-acuk-blue py-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d-flex mb-xs-3">
                        <p class="m-0 text-white"> <a target="_blank" style="color:gold" href=''></a>.</p>
                    </div>
                    <!-- In response to COVID-19, all classes are now conducted online only. -->
                    <div class="col-md-6 d-flex justify-content-md-end">
                        <p class="m-0"><i class="fa fa-mobile text-blue" aria-hidden="true"></i>
                            +1 (567) 6556 786 <i class="fa fa-envelope ml-3 text-blue" aria-hidden="true"></i>
                            support@filecabinet.com</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation bar -->
        <div class="container-fluid shadow-lg" style="background-color:#061e5c;">
            <div class="container">
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                        {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <i class="fas fa-bars"></i>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav pull-right">
                                @if (Auth::guest())
                                    <li class="nav-item mx-2">
                                        <a class="nav-link active" aria-current="page"
                                            href="{{ route('register') }}">Home</a>
                                    </li>
                                    <li class="nav-item mx-2">
                                        <a class="nav-link active" aria-current="page"
                                            href="{{ route('register') }}">Signup</a>
                                    </li>
                                    <li class="nav-item mx-2">
                                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                                    </li>
                                @endif
                                @if (Auth::user())
                                    <li class="nav-item mr-4">
                                        <a class="nav-link active" aria-current="page" href="">Auto Reminder</a>
                                    </li>
                                    <li class="nav-item mr-4">
                                        <a class="nav-link" href="{{ route('upload-document') }}">Upload Document</a>
                                    </li>
                                    <li class="nav-item mr-4">
                                        <a class="nav-link" href="{{ route('manage-document') }}">Manage Document</a>
                                    </li>
                                    <li class="nav-item mr-4">
                                        <a class="nav-link" href="{{ route('appointment') }}">Book Appointment</a>
                                    </li>
                                    <a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
                                @endif

                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="container-fluid d-flex align-items-center" id="hero-section">
        @yield('tags')
    </div>
    @yield('contents')

    @include('layouts._include.footer')
</body>

@include('sweetalert::alert')

</html>
