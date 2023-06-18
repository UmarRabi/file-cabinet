@extends('layouts.main')
@section('contents')
    <section>
        <div class="container-fluid d-flex align-items-center" id="hero-section"
            style="background-image: linear-gradient(90deg,rgba(0, 0, 0, 0.96),rgba(0, 0, 0, 0.96),rgba(0, 0, 0, 0.6),rgba(0, 0, 0, 0.3),rgba(0, 0, 0, 0.1),rgba(0, 0, 0, 0.1)),url({{ asset('assets/img/banner.png') }}); background-repeat:no-repeat; background-size:cover; background-postion:top right; min-height:400px;position: relative">

            @if (Auth::guest())
                <div class="container">
                    <h1 class="font-weight-bold text-white text-uppercase mb-4">File Cabinet</h1>
                    <h1 class="font-weight-bold text-white text-uppercase mb-4">Accounting Portal</h1>
                    <hr style="border: 15px; height:10px; width:300px; color:white; background-color:white;">
                    {{-- <a target="_blank" href="" class="btn btn-acuk-orange px-3 rounded-0 font-weight-bold"></a>
                    <a href="{{ route('signup') }}" class="btn btn-acuk-red px-3 rounded-0 font-weight-bold">Get Started</a> --}}
                </div>
            @endif

            {{-- <div
                style="position: relative;
                width: 100%;
                height: 100%;
                border: 1px solid black;"> --}}
            @if (Auth::user())
                <div class="row justify-content-end"
                    style="position: absolute;
                    bottom: 0;
                    min-width:100%;
                    border: 1px solid red;">
                    <div class="col-7">

                        <form class="d-flex flex-sm-vertical">

                            <div class="dropdown px-1">
                                <a href="{{ route('signup') }}" class="btn"
                                    style="color:#A52B7B !important; background:white; min-width:200px" aria-haspopup="true"
                                    aria-expanded="false">
                                    Auto Reminders
                                </a>
                            </div>
                            <div class="dropdown px-1">
                                <a href="{{ route('login') }}" class="btn"
                                    style="color:#A52B7B !important; background:white; min-width:200px" aria-haspopup="true"
                                    aria-expanded="false">
                                    Upload Document
                                </a>
                            </div>
                            <div class="dropdown px-1">
                                <a href="{{ route('login') }}" class="btn"
                                    style="color:#A52B7B !important; background:white; min-width:200px" aria-haspopup="true"
                                    aria-expanded="false">
                                    Manage Document
                                </a>
                            </div>



                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            @endif
            {{-- <div class="container" style=""> --}}

            {{-- </div> --}}
        </div>
        <div class="row m-5 justify-content-center">

            <div class="col-xl-6 col-md-6 col-sm-12 p-5">
                <div class="card">
                    {{-- <div class="card-header">
                        <hr style="height:3px;width:80px;" class="purple-bg">
                    </div> --}}
                    <div class="card-body">
                        <form>
                            <div class="form-group m-4">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                    else.</small>
                            </div>
                            <div class="form-group m-4">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1"
                                    placeholder="Password">
                            </div>
                            <div class="form-group m-4">
                                <label for="exampleInputPassword1">Confirm Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1"
                                    placeholder="confirm password" name="password_confirmation">
                                @error('password_confirmation')
                                    <small id="emailHelp" class="form-text text-muted">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>
                            <div class="form-check m-4">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <div class="form-group d-flex justify-content-center">
                                <button type="submit" class="btn-purple btn-xx-amaze btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
