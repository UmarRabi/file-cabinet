@extends('layouts.dashboard')
@section('contents')
    <div class="container d-flex justify-content-center">
        <div class="col-8">
            <div class="row py-4">
                <div class="col-md-6 col-xl-6 col-sm-12 py-3">
                    Name : <span>{{ $course->name }}</span>
                </div>
                <div class="col-md-6 col-xl-6 col-sm-12 py-3">
                    Code: <span>
                        {{ $course->code }}
                    </span>
                </div>
                <div class="col-xl-12 col-md-12 col-sm-12 py-3">
                    Course Instructor: <span>
                        {{ $course->instructor ? $course->instructor->name : '' }}
                    </span>
                </div>
                <div class="col-xl-12 col-md-12 col-sm-12 py-3">
                    Created By: <span>
                        {{ $course->creator ? $course->creator->name : '' }}
                    </span>
                </div>
                @if (Auth::user()->hasRole(['program director', 'program manager', 'online instructor']))
                    <div class="col-xl-12 col-md-12 col-sm-12 py-3">
                        <form method="POST" action="{{ route('courses.material.upload') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group m-4">
                                <label for="exampleInputEmail1">File</label>
                                <input type="file" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter Name" name="file">
                                @error('file')
                                    <small id="emailHelp" class="form-text text-muted">
                                        {{ $message }}
                                    </small>
                                @enderror

                            </div>
                            <input type="hidden" name="code" value="{{ $course->code }}">
                            <div class="form-group d-flex justify-content-center">
                                <button type="submit" class="btn-purple btn-xx-amaze btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                @endif

            </div>
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>file</th>
                        <th>path</th>
                        <th>Date Created</th>
                        <th>Last Modified</th>
                        <th>Creator</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($course->materials as $material)
                        <tr>
                            <td>{{ $material->file }}</td>
                            <td>{{ $material->path }}</td>
                            <td>{{ $material->created_at }}</td>
                            <td>{{ $material->updated_at }}</td>
                            <td>
                                {{ $material->creator ? $material->creator->name : '' }}
                            </td>
                            <td>
                                <a class="btn btn-info" href="{{ route('material.view', ['id' => $material->id]) }}">
                                    View
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
