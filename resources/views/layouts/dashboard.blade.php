<html>
@include('layouts._include.header')

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown link
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid d-flex align-items-center" id="hero-section"
        style="background-image: linear-gradient(90deg,rgba(0, 0, 0, 0.96),rgba(0, 0, 0, 0.96),rgba(0, 0, 0, 0.6),rgba(0, 0, 0, 0.3),rgba(0, 0, 0, 0.1),rgba(0, 0, 0, 0.1)),url({{ asset('assets/img/banner.png') }}); background-repeat:no-repeat; background-size:cover; background-postion:top right; min-height:400px;position: relative">
        @if (Auth::user()->hasRole('user'))
            <div class="row justify-content-end"
                style="position: absolute;
                    bottom: 0;
                    min-width:100%;
                    border: 1px solid red;">
                <div class="col-xl-7 col-sm-12">
                    <nav class="navbar navbar-expand-lg navbar-light " style="color:white;">
                        <div class="container-fluid mx-3">
                            <button class="navbar-toggler" style="background-color: white;" type="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
                                aria-controls="navbarTogglerDemo01" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarTogglerDemo01" style="color:white">
                                <form class="d-flex flex-lg-row flex-sm-column">
                                    <div class="dropdown px-1">
                                        <a href="{{ route('signup') }}" class="btn"
                                            style="color:#A52B7B !important; background:white; min-width:200px"
                                            aria-haspopup="true" aria-expanded="false">
                                            Auto Reminders
                                        </a>
                                    </div>
                                    <div class="dropdown px-1">
                                        <a href="{{ route('upload-document') }}" class="btn btn-blue"
                                            style="color:#A52B7B !important; background:white; min-width:200px"
                                            aria-haspopup="true" aria-expanded="false">
                                            Upload Document
                                        </a>
                                    </div>
                                    <div class="dropdown px-1">
                                        <a href="{{ route('manage-document') }}" class="btn"
                                            style="color:#A52B7B !important; background:white; min-width:200px"
                                            aria-haspopup="true" aria-expanded="false">
                                            Manage Document
                                        </a>
                                    </div>
                                    <div class="dropdown px-1">
                                        <a href="{{ route('appointment') }}" class="btn"
                                            style="color:#A52B7B !important; background:white; min-width:200px"
                                            aria-haspopup="true" aria-expanded="false">
                                            Book Appointment
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        @endif
    </div>
    @yield('contents')
    @include('layouts._include.footer')
</body>
@include('sweetalert::alert')

</html>
