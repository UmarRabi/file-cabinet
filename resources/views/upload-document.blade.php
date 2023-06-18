@extends('layouts.dashboard')
@section('contents')
    <section>
        <div class="row m-5 justify-content-center">
            <div class="col-xl-8 col-sm-12 m-5 p-5" style=" border: 5px solid #061e5c; height:400px;">
                <form action="{{ route('savefile') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group m-3">
                        <input type="file" name="upload" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-blue">
                        Upload
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection
