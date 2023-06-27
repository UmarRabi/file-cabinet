@extends('layouts.main')
@section('contents')
    <section>
        <div class="row m-2 justify-content-center">
            <div class="col-xl-8 col-sm-12 m-5 p-1" style=" height:400px;">
                <form action="{{ route('savefile') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group m-3 col-5">
                            <input type="file" name="upload" class="form-control">
                        </div>
                        <div class="form-group m-3 col-5">
                            <select name="file_category" id="type" class="form-control">
                                <option value="">Select Document Type</option>
                                <option value="mp">Monthly Payroll</option>
                                <option value="qv">Quarterly VAT</option>
                                <option value="ar">Annual Returns</option>
                            </select>
                            {{-- <input type="file" name="upload" class="form-control"> --}}
                        </div>
                    </div>

                    <div class="form-group m-3">

                        <button type="submit" class="btn btn-blue">
                            Upload
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
@section('tags')
    <div class="container mt-5 py-5">
        <h2 style="margin-left: 20%;; color:white;font-weight:bolder;">
            Upload Documents
        </h2>
        {{-- <hr style="width: 300px;height:5px;background:white;"> --}}
    </div>
@endsection
