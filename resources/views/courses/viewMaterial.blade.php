@extends('layouts.dashboard')
@section('contents')
    <div class="container d-flex justify-content-center">
        <div class="col-8">
            <div class="row py-4">
                @if (in_array($material->file_type, ['pdf', 'docx', 'doc']))
                    <object data="{{ asset(str_replace('public', 'storage', $material->path)) }}" width="100%"
                        height="1000px">
                        <p>Alternative text - include a link <a href="{{ $material->file }}">to the PDF!</a></p>
                    </object>
                @endif

                @if (in_array($material->file_type, ['mp4', '3gp', 'mpeg']))
                    <video class="embed-responsive-item" controls muted autoplay name="media">
                        <source src="{{ asset(str_replace('public', 'storage', $material->path)) }}" type="video/mp4">
                    </video>
                @endif

                @if (in_array($material->file_type, ['jpg', 'jpeg', 'png', 'PNG']))
                    <img src="" alt="{{ asset(str_replace('public', 'storage', $material->path)) }}">
                @endif
            </div>

        </div>
    </div>
@endsection
