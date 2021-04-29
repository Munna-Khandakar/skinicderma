@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <h4 class="page-title">Edit Appointment</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <form method="POST" class="sign-up-form" action="{{ route('appointmentDate') }}"> 
            @csrf 
            @foreach($patient as $data)
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Patient Name</label>
                            <input class="form-control" type="text" value='{{ $data -> name}}' name="name" readonly="">
                        </div>
                    </div>
                  
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Patient Gender</label>
                            <input class="form-control" type="text" value='{{ $data -> gender}}' name="gender" readonly="">
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Patient Phone Number</label>
                            <input class="form-control" type="text" value='{{ $data -> phone}}' name="phone" readonly="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" type="hidden" value='{{ $data -> id}}' readonly="" name="id">
                            <input class="form-control" type="email" value='{{ $data -> email}}' readonly="" name="email">
                        </div>
                    </div>
                 </div>
                 <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Date</label>
                            <div class="cal-icon">
                                <input type="text" class="form-control datetimepicker" name="date" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Time</label>
                            <div class="time-icon">
                                <input type="text" class="form-control" id="datetimepicker3" name="time" required>
                            </div>
                        </div>
                    </div>
                 </div>

                <div class="m-t-20 text-center">
                    <button class="btn btn-primary submit-btn">Save</button>
                </div>
                @endforeach
            </form>
        </div>
    </div>
</div>

@endsection
