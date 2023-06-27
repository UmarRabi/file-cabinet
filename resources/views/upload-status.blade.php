@extends('layouts.main')
<style>
    ::-webkit-calendar-picker-indicator {
        filter: invert(1);
    }

    .label-span {
        font-family: Inter;
        font-size: 20px;
        font-weight: 500;
        line-height: 29px;
        letter-spacing: 0em;
        text-align: left;
        color: #061E5C;
    }

    .auto-label {
        /* Set Auto Reminder */

        font-family: 'Inter';
        font-style: normal;
        font-weight: 600;
        font-size: 32px;
        line-height: 39px;
        /* identical to box height */

        color: #061E5C;


    }

    .text-span {
        font-family: Inter;
        font-size: 18px;
        font-weight: 500;
        line-height: 29px;
        letter-spacing: 0em;
        text-align: left;
    }

    .btn-default {
        background: #94A8CF !important;
        color: #061E5C !important;
    }

    .div-text {
        background: #94A8CF;
        height: 112px;
    }
</style>
@section('contents')
    <section>
        <div class="row my-4 justify-content-center" style="border-radius: 8px;background: #061E5C;">
            <div class="row justify-content-center mt-5">
                <a href="{{ route('upload-document') }}" class="btn btn-default mx-2">
                    Upload
                </a>
                <a href="{{ route('upload-document') }}" class="btn btn-default mx-2">
                    Upload
                </a>
            </div>
            <h4 style="color: #FFFFFF;">&nbsp;</h4>
            <h4 style="color: #FFFFFF;">&nbsp;</h4>
            {{-- <h4 style="color: #FFFFFF;">&nbsp;</h4> --}}
        </div>

        <div class="row my-4 justify-content-center" style="border-radius: 8px;background: #061E5C;">
            <div class="row justify-content-center my-auto mx-auto">
                <h4 style="color: #FFF" class="d-flex justify-content-center">Folders</h4>
            </div>
        </div>
        <div class="row m-5 justify-content-center">
            <div class="col-xl-11 col-md-11 col-sm-12 row" style="height:400px;">
                <div class="col-xl-3 col-md-3 col-sm-12 px-3" style="background: #94A8CF;">
                    <h4 style="color:#061E5C;">Fiscal Year</h4>
                    <div class="row mt-3" style="width: 80% !important;">
                        <div class="row my-2 mx-auto" style="background:#061E5C;">
                            <h6 style="color: #FFFFFF">2021</h6>
                        </div>
                        <div class="row my-2 mx-auto" style="background:#061E5C;">
                            <h6 style="color: #FFFFFF">2022</h6>
                        </div>
                        <div class="row my-2 mx-auto" style="background:#061E5C;">
                            <h6 style="color: #FFFFFF">2023</h6>
                        </div>
                    </div>
                    {{-- <div class="row mt-3">
                        <div class="my-auto mx-auto" style="background:#061E5C;">
                            <h6 style="color: #FFFFFF">2022</h6>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="row my-auto" style="background:#061E5C;">
                            <h6 style="color: #FFFFFF">2023</h6>
                        </div>
                    </div> --}}
                </div>

                <div class="col-xl-9 col-md-9 col-sm-12 justify-content-between" style="min-height:100%">
                    <div class="row mx-3" style="background: #94A8CF; min-height:100%; min-width:100%;">
                        <div class="row mx-5 my-5" style="height: fit-content;">
                            <div class="col-5" style="background: #061E5C;">
                                <h4 style="color: #FFF" class="d-flex justify-content-center">
                                    {{ $file->file_category == 'mp'
                                        ? 'Monthly Payroll'
                                        : ($file->file_category == 'qv'
                                            ? 'Quarterly VAT'
                                            : ($file->file_category == 'ar'
                                                ? 'Annual Revenue'
                                                : '')) }}
                                </h4>

                            </div>
                            <h5 class="my-4 row">
                                <a href="{{ asset('storage/' . $file->path) }}">
                                    {{ $file->original_name }}
                                </a>

                            </h5>

                            @if (Auth::user()->hasRole('admin'))
                                <h5 class="my-4 row">

                                    {{ $file->user->email }}
                                </h5>
                            @endif


                        </div>

                        <div class="row flex-column-reverse">
                            @if (Auth::user()->hasRole('admin'))
                                <form action="{{ route('change-file-status') }}" method="POST">
                                    @csrf
                                    <div class="col-xl-5 col-md-5 col-sm-12">
                                        <div class="form-group">
                                            <select id="" class="form-control" name="status">
                                                <option {{ $file->status == 1 ? 'selected' : '' }} value="1">Approve
                                                </option>
                                                <option {{ $file->status == 0 ? 'selected' : '' }} value="0">Not
                                                    Approved</option>
                                            </select>
                                            <input type="hidden" value="{{ $file->id }}" name="file_id">
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-blue bg-blue">
                                                Update
                                            </button>
                                        </div>

                                    </div>
                                </form>
                            @else
                                <div class="row mx-5 my-5" style="height: fit-content;">
                                    <div class="col-5" style="background: #061E5C;">
                                        <h4 style="color: #FFF" class="d-flex justify-content-center">
                                            {{ $file->status == 1 ? 'Approved' : 'Not Approved' }}
                                        </h4>
                                    </div>
                                </div>
                            @endif


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
