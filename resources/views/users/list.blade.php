@extends('layouts.main')
@section('contents')
    <div class="container">
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>

                    <th>email</th>
                    <th>role</th>
                    <th>Date Created</th>
                    <th>Last Modified</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>

                        <td>{{ $user->email }}</td>
                        <td>{{ $user->roles[0]->name }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td>{{ $user->updated_at }}</td>
                        <td>
                            <a href="{{ route('admin-reminder', ['id' => $user->id]) }}" class="btn btn-blue bg-blue">
                                Set Reminder
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
