@extends('layouts.admin')
@section('content')
<div class="content">
    @if(session()->has('msg'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> {{session()->get('msg')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <div class="row">
        <div class="col-sm-4 col-3">
            <h4 class="page-title">Appointments</h4>
        </div>
        <div class="col-sm-8 col-9 text-right m-b-20">
            <a href="{{route('newAppointment')}}" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Appointment</a>
        </div>
    </div>
     <div class="content-wrapper">

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <table id="order-listing" class="table table-striped" style="width:100%;">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Gender</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($appointments as $patient)
                                <tr>
                                    <td><img width="28" height="28" src="admin/assets/img/user.jpg" class="rounded-circle m-r-5" alt=""> {{ $patient -> name}} </td>
                                    <td>{{$patient->email}}</td>
                                    <td>{{$patient->phone}}</td>
                                    <td>{{$patient->gender}}</td>
                                    <td>{{$patient->date}}</td>
                                    <td>
                                        <button class="btn btn-outline-primary" onclick="window.location='{{ route('add_record',['phone' => $patient->phone])}}'">ADD Record</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
