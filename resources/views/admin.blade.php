@extends('layouts.dashboard')
<style>
    .label-span {
        font-family: Inter;
        font-size: 32px;
        font-weight: 500;
        line-height: 39px;
        letter-spacing: 0em;
        text-align: left;
        color: #061E5C;
    }

    .text-span {
        font-family: Inter;
        font-size: 24px;
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
            <div class="col-xl-9 col-md-9 col-sm-12 row" style=" border: 5px solid #061e5c; height:400px;">
                <div class="col-xl-4 col-md-4 col-sm-12 justify-content-between"
                    style=" background: #94A8CF; min-height:100%">
                    <div class="row justify-content-center py-3">
                        <a href="{{ route('manage-document') }}" class="btn btn-default"
                            style="background: #D9D9D9; height:70px;">
                            View Document
                        </a>
                    </div>
                    <div class="row justify-content-center py-3">
                        <a href="{{ route('appointment') }}" class="btn" style="background: #D9D9D9;height:70px;">
                            Book Appointment
                        </a>
                    </div>
                    <div class="row justify-content-center py-3">
                        <button class="btn" style="background: #D9D9D9;height:70px;">
                            Auto Reminder
                        </button>
                    </div>
                </div>
                <div class="col-xl-8 col-md-8 col-sm-12" style="background: #D9D9D9;">
                    <div class="row justify-content-center my-5">
                        <div class="col-xl-3 col-md-4 col-sm-12 mx-2">
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
                        <div class="col-xl-3 col-md-4 col-sm-12 mx-2">
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
                        <div class="col-xl-3 col-md-4 col-sm-12 mx-2">
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
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
