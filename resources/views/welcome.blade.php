@extends('layouts.main')
@section('contents')
    <section>
        <div class="row justify-content-center">

            <div class="col-xl-6 col-md-6 col-sm-12 p-2">
                <div class="card">
                    <div class="card-header" style="background: no-background">
                        <h3 class="d-flex justify-content-center blue-text">Register</h3>
                        {{-- <hr style="height:3px;width:80px;" class="purple-bg"> --}}
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('signup') }}">
                            @csrf
                            <div class="form-group m-4">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter email">
                                @error('email')
                                    <small id="emailHelp" class="form-text text-muted">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>
                            <div class="form-group m-4">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                                    placeholder="Password">
                                @error('password')
                                    <small id="emailHelp" class="form-text text-muted">
                                        {{ $message }}
                                    </small>
                                @enderror
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
                                <label class="form-check-label" for="exampleCheck1">By registering, I agree with the Terms
                                    of Use & Privacy Policy</label>
                            </div>
                            <div class="form-group d-flex justify-content-center">
                                <button type="submit" class="btn-blue btn-xx-amaze btn btn-primary">Submit</button>
                            </div>
                        </form>
                        <div class="d-flex justify-content-center blue-text">
                            Already have an account?
                            <a class="blue-text" href="{{ route('login') }}">
                                &nbsp; Log in
                            </a>

                        </div>

                    </div>
                </div>
            </div>
            {{-- <div class="col-xl-6 col-md-6 col-sm-12 p-5">
                <p class="password-p" style="font-family: ">
                    Password must be at least 8
                    characters long.
                </p>
                <p class="password-p">
                    Password must contain at least
                    one uppercase letter.
                </p>
                <p class="password-p">
                    Password must contain at least
                    one lowercase letter.
                </p>
                <p class="password-p">
                    Password must contain at least one
                    number and special character
                    ($%&*#>)
                </p>
            </div> --}}
        </div>
    </section>
@endsection
@section('tags')
    <div class="container">
        <h1 class="font-weight-bold text-white text-uppercase mb-4">File Cabinet</h1>
        <h1 class="font-weight-bold text-white text-uppercase mb-4">Accounting Portal</h1>
        <hr style="border: 15px; height:10px; width:300px; color:white; background-color:white;">
        {{-- <a target="_blank" href="" class="btn btn-acuk-orange px-3 rounded-0 font-weight-bold"></a>
                    <a href="{{ route('signup') }}" class="btn btn-acuk-red px-3 rounded-0 font-weight-bold">Get Started</a> --}}
    </div>
@endsection
