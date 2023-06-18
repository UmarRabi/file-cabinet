@extends('layouts.dashboard')
@section('contents')
    <section>
        <div class="container mx-5 px-5 d-flex justify-content-center">
            <div class="card col-xl-7 col-md-5 col-sm-12">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                @endif
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group m-4">
                            <label for="exampleInputEmail1">First Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="Enter firstname" name="firstname">
                            @error('firstname')
                                <small id="emailHelp" class="form-text text-muted">
                                    {{ $message }}
                                </small>
                            @enderror

                        </div>
                        <div class="form-group m-4">
                            <label for="exampleInputEmail1"> last name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="Enter lastname" name="lastname">
                            @error('lastname')
                                <small id="emailHelp" class="form-text text-muted">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                        <div class="form-group m-4">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="Enter email address" name="email">
                            @error('email')
                                <small id="emailHelp" class="form-text text-muted">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                        <div class="form-group m-4">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"
                                name="password">
                            @error('password')
                                <small id="emailHelp" class="form-text text-muted">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                        {{-- <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div> --}}
                        <div class="form-group m-4">
                            <label for="exampleInputPassword1">Role</label>
                            <select type="password" class="form-control" id="exampleInputPassword1"
                                placeholder="confirm password" name="role">
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}">
                                        {{ $role->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('password_confirmation')
                                <small id="emailHelp" class="form-text text-muted">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                        {{-- <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div> --}}
                        <div class="form-group d-flex justify-content-center">
                            <button type="submit" class="btn-purple btn-xx-amaze btn btn-primary">Submit</button>
                        </div>
                    </form>
                    <div class="d-flex">

                        <a href="{{ route('home') }}" class="mx-3">Login</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
