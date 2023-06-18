<html>

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <style>
        .password-p {
            font-size: 20px;
            font-weight: 600;
            width: inherit;
        }

        /* a {
            color: white !important
        } */

        .nav>li {
            color: white !important;
        }

        .navbar-light .navbar-brand {
            color: white !important;
        }

        .blue-text {
            color: #061e5c;
        }

        .blue-bg,
        .btn-blue {
            background-color: #061e5c;
            color: white;

        }

        .btn {
            width: 200px
        }

        .navbar-light .navbar-nav .nav-link.active,
        .navbar-light .navbar-nav .show>.nav-link {
            color: white !important;
        }

        .navbar-light .navbar-nav .nav-link {
            color: white;
        }

        .btn-xx-amaze {
            width: 90%;
        }

        .dropdown-toggle {
            background: white;
            color: black;
        }

        .paginate_button,
        .page-link {
            color: black !important;
        }
    </style>
</head>

<body style="min-width: 100vw;">
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
