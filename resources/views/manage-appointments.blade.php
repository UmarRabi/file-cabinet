@extends('layouts.dashboard')
@section('contents')
    <style>
        .text-span {
            font-family: Inter;
            font-size: 24px;
            font-weight: 500;
            line-height: 29px;
            letter-spacing: 0em;
            text-align: left;
        }
    </style>
    <section>
        <div class="row m-5 justify-content-center">
            <div class="col-xl-8 col-sm-12 m-5 p-5" style=" border: 5px solid #061e5c;">
                <form class="d-flex flex-lg-row flex-sm-column">
                    <div class="dropdown px-1">
                        <a href="{{ route('upload-document') }}" class="btn btn-blue"
                            style="color:#061e5c !important; background:white; min-width:300px" aria-haspopup="true"
                            aria-expanded="false">
                            Upload Document
                        </a>
                    </div>
                </form>
                @foreach ($documents as $document)
                    <div class="row my-2" style="background: #94a8cf; height:100px;">
                        <div class="col-xl-4 col-md-4 col-sm-12 mt-4 text-span">
                            {{ $document->original_name }}
                        </div>

                        <div class="col-xl-4 col-md-4 col-sm-12">
                            @if (Auth::user()->hasRole(['admin']))
                                <div class="col-xl-4 col-md-4 col-sm-12 mt-4 text-span">
                                    {{ $document->user->email }}
                                </div>
                            @endif
                        </div>
                        <div class="col-xl-4 col-md-4 col-sm-12 mt-4 text-span">
                            {{ $document->created_at }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
