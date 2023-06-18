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
                    <form method="POST" action="{{ route('courses.save') }}">
                        @csrf
                        <div class="form-group m-4">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="Enter Name" name="name">
                            @error('name')
                                <small id="emailHelp" class="form-text text-muted">
                                    {{ $message }}
                                </small>
                            @enderror

                        </div>
                        <div class="form-group m-4">
                            <label for="exampleInputEmail1"> Code</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="Enter code" name="code">
                            @error('code')
                                <small id="emailHelp" class="form-text text-muted">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                        <div class="form-group d-flex justify-content-center">
                            <button type="submit" class="btn-purple btn-xx-amaze btn btn-primary">Submit</button>
                        </div>
                    </form>
                    {{-- <div class="d-flex">

                        <a href="{{ route('home') }}" class="mx-3">Login</a>
                    </div> --}}

                </div>
            </div>
        </div>
    </section>
@endsection
