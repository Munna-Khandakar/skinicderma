@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <h4 class="page-title">Save Patient Records</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <form method="POST" class="sign-up-form" action="{{ route('saveRecords') }}">
                @csrf

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Patient Name</label>
                            <input class="form-control" type="text" required name="name" value="{{$appointment->name}}">
                             <input type="text"  name="id" value="{{$appointment->id}}" hidden>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Patient Gender</label>
                            <input class="form-control" type="text" required name="gender" value="{{$appointment->gender}}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Patient Phone Number</label>
                            <input class="form-control" type="text" required name="phone" value="{{$appointment->phone}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Patient Email</label>
                            <input class="form-control" type="email" name="email" value="{{$appointment->email}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>activity01</label>
                            <input class="form-control" type="text"  name="activity01">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>activity02</label>
                            <input class="form-control" type="text"  name="activity02">
                        </div>
                    </div>
                </div>
                              <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Due</label>
                            <input class="form-control" type="number"  name="due">
                        </div>
                    </div>
                    {{-- <div class="col-md-6">
                        <div class="form-group">
                            <label>activity02</label>
                            <input class="form-control" type="text"  name="activity02">
                        </div>
                    </div> --}}
                </div>

                <div class="m-t-20 text-center">
                    <button class="btn btn-primary submit-btn">Save</button>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection
