@extends('layouts.dashboard')
@section('contents')
    <section>
        <div class="container-fluid d-flex align-items-center" id="hero-section"
            style="background-image: linear-gradient(90deg,rgba(0, 0, 0, 0.96),rgba(0, 0, 0, 0.96),rgba(0, 0, 0, 0.6),rgba(0, 0, 0, 0.3),rgba(0, 0, 0, 0.1),rgba(0, 0, 0, 0.1)),url({{ asset('assets/img/banner.png') }}); background-repeat:no-repeat; background-size:cover; background-postion:top right; min-height:400px;position: relative">
            @if (Auth::user())
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
                                            <a href="{{ route('login') }}" class="btn"
                                                style="color:#A52B7B !important; background:white; min-width:200px"
                                                aria-haspopup="true" aria-expanded="false">
                                                Manage Document
                                            </a>
                                        </div>
                                        <div class="dropdown px-1">
                                            <a href="{{ route('login') }}" class="btn"
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
        <div class="row m-5 justify-content-center">
            <div class="col-xl-8 col-sm-12 m-5 p-5" style=" border: 5px solid #061e5c;">
                <form class="d-flex flex-lg-row flex-sm-column">
                    {{-- <div class="dropdown px-1">
                        <a href="{{ route('signup') }}" class="btn"
                            style="color:#A52B7B !important; background:white; min-width:200px" aria-haspopup="true"
                            aria-expanded="false">
                            Auto Reminders
                        </a>
                    </div> --}}
                    <div class="dropdown px-1">
                        <a href="{{ route('upload-document') }}" class="btn btn-blue"
                            style="color:#061e5c !important; background:white; min-width:300px" aria-haspopup="true"
                            aria-expanded="false">
                            Upload Document
                        </a>
                    </div>
                    {{-- <div class="dropdown px-1">
                        <a href="{{ route('login') }}" class="btn  btn-blue" style="min-width:300px" aria-haspopup="true"
                            aria-expanded="false">
                            Manage Document
                        </a>
                    </div>
                    <div class="dropdown px-1">
                        <a href="{{ route('login') }}" class="btn  btn-blue" style="  min-width:300px" aria-haspopup="true"
                            aria-expanded="false">
                            Book Appointment
                        </a>
                    </div> --}}
                </form>
                <div class="row" style="height: 200px;">

                </div>
                <div class="row my-2" style="background: #94a8cf; height:100px;">
                </div>
                <div class="row my-2" style="background: #94a8cf; height:100px;">
                </div>
                <div class="row my-2" style="background: #94a8cf; height:100px;">
                </div>
            </div>
        </div>
    </section>
@endsection