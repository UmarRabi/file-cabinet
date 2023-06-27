@extends('layouts.main')
<style>
    .label-span {
        font-family: Inter;
        font-size: 20px;
        font-weight: 500;
        line-height: 29px;
        letter-spacing: 0em;
        text-align: left;
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

    .div-text {
        background: #94A8CF;
        height: 112px;
    }
</style>
@section('contents')
    <section>
        <div class="row m-5 justify-content-center">
            <div class="col-xl-11 col-md-11 col-sm-12 row" style="height:400px;">
                <div class="col-xl-2 col-md-2 col-sm-12 justify-content-between"
                    style=" background: #94A8CF; min-height:100%">
                    <div class="row justify-content-center py-3">
                        <a href="{{ route('manage-document') }}" class="btn btn-default"
                            style="background: #D9D9D9; height:70px; width:80% !important">
                            View Document
                        </a>
                    </div>
                    <div class="row justify-content-center py-3">
                        <a href="{{ route('appointment') }}" class="btn"
                            style="background: #D9D9D9;height:70px; width:80% !important">
                            Book Appointment
                        </a>
                    </div>
                    {{-- <div class="row justify-content-center py-3">
                        <a href="{{ route('admin-reminder') }}" class="btn"
                            style="background: #D9D9D9;height:70px; width:80% !important">
                            Auto Reminder
                        </a>
                    </div> --}}
                </div>
                <div class="col-xl-10 col-md-10 col-sm-12" style="background: #D9D9D9;">
                    <div class="row justify-content-center my-5">
                        <div class="col-xl-3 col-md-3 col-sm-12 mx-1">
                            <div class="row">
                                <span class="label-span">
                                    Document
                                </span>
                            </div>
                            <div class="row div-text mt-3">
                                <span class="text-span mt-4">
                                    Document pending for reviews
                                </span>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-3 col-sm-12 mx-1">
                            <div class="row">
                                <span class="label-span">
                                    Appointment
                                </span>
                            </div>
                            <div class="row div-text mt-3">
                                <span class="text-span mt-4">
                                    Information on Pending Meetings
                                </span>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-3 col-sm-12 mx-1">
                            <div class="row">
                                <span class="label-span">
                                    Set Notifications
                                </span>
                            </div>
                            <div class="row div-text mt-3">
                                <span class="text-span mt-4">
                                    Information on Submission Alert
                                </span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
