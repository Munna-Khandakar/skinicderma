@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <h4 class="page-title">New Appointment</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <form method="POST" class="sign-up-form" action="{{ route('bookAppointmentManually') }}">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Patient Name</label>
                            <input class="form-control" type="text" required name="name" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Patient Gender</label>
                            <input class="form-control" type="text" required name="gender" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Patient Phone Number</label>
                            <input class="form-control" type="text" required name="phone" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Patient Email</label>
                            <input class="form-control" type="email" name="email" >
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
                    {{-- the time will set from office starting hour --}}
                    {{-- <div class="col-md-6">
                        <div class="form-group">
                            <label>Time</label>
                            <div class="time-icon">
                                <input type="text" class="form-control" id="datetimepicker3" name="time" required>
                            </div>
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
