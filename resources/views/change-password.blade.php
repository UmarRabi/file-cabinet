@extends('layouts.main')
@section('contents')
    <section>
        <div class="row m-2 justify-content-center">

            <div class="col-xl-6 col-md-6 col-sm-12">
                <div class="card">
                    {{-- <div class="card-header">
                        <hr style="height:3px;width:80px;" class="purple-bg">
                    </div> --}}
                    <div class="card-body">
                        <form>
                            <div class="form-group m-4">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                    placeholder="Enter email">
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
                            {{-- <div class="form-check m-4">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div> --}}
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
@section('tags')
    <div class="container">
        <h1 class="font-weight-bold text-white text-uppercase mb-4">File Cabinet</h1>
        <h1 class="font-weight-bold text-white text-uppercase mb-4">Accounting Portal</h1>
        <hr style="border: 15px; height:10px; width:300px; color:white; background-color:white;">
        {{-- <a target="_blank" href="" class="btn btn-acuk-orange px-3 rounded-0 font-weight-bold"></a>
                    <a href="{{ route('signup') }}" class="btn btn-acuk-red px-3 rounded-0 font-weight-bold">Get Started</a> --}}
    </div>
@endsection
