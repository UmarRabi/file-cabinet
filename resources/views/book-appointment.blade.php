@extends('layouts.main')
@section('contents')
    <section>
        <div class="row m-5 justify-content-center">
            <div class="col-xl-8 col-sm-12 m-5 p-5" style=" border: 5px solid #061e5c; height:500px; overflow:scroll;">
                <form action="{{ route('save-appointment') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group m-3 col-3">
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="form-group m-3 col-3">
                            <input type="date" name="booked_date" class="form-control">
                        </div>
                        <div class="form-group m-3 col-3">
                            <input type="time" name="booked_time" class="form-control">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-blue">
                        Upload
                    </button>
                </form>
                @foreach ($appointments as $appointment)
                    <div class="row my-2" style="background: #94a8cf; height:100px;">
                        <div class="col-xl-4 col-md-4 col-sm-12 mt-4 text-span">
                            Title: {{ $appointment->title }}
                        </div>

                        <div class="col-xl-4 col-md-4 col-sm-12">
                            @if (Auth::user()->hasRole(['admin']))
                                <div class="col-xl-4 col-md-4 col-sm-12 mt-4 text-span">
                                    {{ $appointment->user->email }}
                                </div>
                            @endif
                        </div>
                        <div class="col-xl-4 col-md-4 col-sm-12 mt-4 text-span">
                            DateTime: {{ $appointment->booked_date }} {{ $appointment->booked_time }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
