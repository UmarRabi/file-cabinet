@extends('layouts.dashboard')
@section('contents')
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>code</th>
                <th>Date Created</th>
                <th>Last Modified</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($courses as $course)
                <tr>
                    <td>{{ $course->name }}</td>
                    <td>{{ $course->code }}</td>
                    <td>{{ $course->created_at }}</td>
                    <td>{{ $course->updated_at }}</td>
                    <td>
                        <a href="{{ route('courses.view', ['id' => $course->id]) }}" class="btn btn-info">
                            View
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
