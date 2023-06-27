@extends('layouts.main')
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
            <div class="col-xl-8 col-sm-12 m-5 p-5" style="">
                @if (Auth::user()->hasRole('user'))
                    <form class="d-flex flex-lg-row flex-sm-column">
                        <div class="dropdown px-1">
                            <a href="{{ route('upload-document') }}" class="btn btn-blue bg-blue" style="  min-width:300px"
                                aria-haspopup="true" aria-expanded="false">
                                Upload Document
                            </a>
                        </div>
                    </form>
                @endif

                <div class="row my-2">
                    <table id="example" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>

                                <th>file Nmae</th>
                                @if (Auth::user()->hasRole(['admin']))
                                    <th>
                                        Email
                                    </th>
                                @endif
                                <th>
                                    For
                                </th>
                                <th>Date Created</th>
                                <th>Last Modified</th>
                                {{-- @if (Auth::user()->hasRole(['admin'])) --}}
                                <th>Action</th>
                                {{-- @endif --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($documents as $document)
                                <tr>

                                    <td> {{ $document->original_name }}</td>

                                    @if (Auth::user()->hasRole(['admin']))
                                        <td>
                                            {{ $document->user->email }}
                                        </td>
                                    @endif
                                    <td>
                                        {{ $document->file_category == 'mp'
                                            ? 'Monthly Payroll'
                                            : ($document->file_category == 'qv'
                                                ? 'Quarterly VAT'
                                                : ($document->file_category == 'ar'
                                                    ? 'Annual Revenue'
                                                    : '')) }}
                                    </td>
                                    <td>{{ $document->created_at }}</td>
                                    <td>{{ $document->updated_at }}</td>
                                    {{-- @if (Auth::user()->hasRole(['admin'])) --}}
                                    <td>
                                        <a href="{{ route('view-file', ['id' => $document->id]) }}"
                                            class="btn btn-blue bg-blue">
                                            Review
                                        </a>
                                    </td>
                                    {{-- @endif --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
