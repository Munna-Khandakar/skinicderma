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
        <div class="col-sm-7 col-6">
            <h4 class="page-title">Patient Profile</h4>
        </div>
    </div>

    <div class="card-box profile-header">

        <div class="row">
            <div class="col-md-12">
                <div class="profile-view">
                    <div class="profile-img-wrap">
                        <div class="profile-img">
                            <a href="#"><img class="avatar" src="{{asset('admin/assets/img/user.jpg')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="profile-basic">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="profile-info-left">
                                    <h3 class="user-name m-t-0 mb-0">{{ $patient->name }}</h3>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <ul class="personal-info">
                                    <li>
                                        <span class="title">Name:</span>
                                        <span class="text">{{ $patient->name }}</span>
                                    </li>
                                    <li>
                                        <span class="title">Phone:</span>
                                        <span class="text">{{ $patient->phone }}</span>
                                    </li>
                                    <li>
                                        <span class="title">Email:</span>
                                        <span class="text"> {{$patient->email }}</span>
                                    </li>
                                    <li>
                                        <span class="title">Gender:</span>
                                        <span class="text">{{ $patient->gender }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                                    <th>Service</th>
                                    <th>Adviced Sitting to be done</th>
                                    <th>Sitting completed</th>
                                    <th>Remaining sitting</th>
                                    <th>Total Bill to be paid</th>
                                    <th>Paid Amount</th>
                                    <th>Next Date</th>
                                    <th>Due Amount</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <Form method="POST" class="sign-up-form" action="{{ route('saveRecords') }}">
                                        @csrf
                                        <td><input type='text' name='service' style='width:150px'></td>
                                        <td><input type='text' name='advice_sitting' style='width:50px'></td>
                                        <td><input type='text' name='sitting_completed' style='width:50px'></td>
                                        <td>
                                        <input type='text' name='patient_id' value={{ $patient->id}} hidden>
                                        <input type='text' name='name' value={{ $patient->name}} hidden>
                                        <input type='email' name='email' value={{ $patient->email}} hidden>
                                        </td>
                                        <td><input type='text' name='total_bill' style='width:50px'></td>
                                        <td><input type='text' name='paid_amount' style='width:50px'></td>
                                        <td><input type='date' name='next_date' style='width:150px'></td>
                                        <td> <button type="submit">Save</button></td>
                                    </Form>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href=""><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                <a class="dropdown-item" onclick="return confirm('Are you sure?')" href="" href="#"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @foreach ($records as $record)
                                <tr>
                                    <td>{{$record->service}}</td>
                                    <td>{{$record->advice_sitting}}</td>
                                    <td>{{$record->sitting_completed}}</td>
                                    <td>{{$record->advice_sitting - $record->sitting_completed}}</td>
                                    <td>{{$record->total_bill}}</td>
                                    <td>{{$record->paid_amount}}</td>
                                    <td>{{$record->next_date}}</td>
                                    <td>
                                        @if ($record->total_bill - $record->paid_amount)
                                        <label class="badge badge-danger">{{$record->total_bill - $record->paid_amount}}</label>
                                        @else
                                        <label class="badge badge-success">Clear</label>
                                        @endif

                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" onclick="return confirm('Are you sure?')" href="{{ route('clear_due',['id' => $record->id]) }}"><i class="fa fa-trash-o m-r-5"></i> Clear Due</a>
                                                <a class="dropdown-item" href=""><i class="fa fa-pencil m-r-5"></i> Set Appointment</a>
                                            </div>
                                        </div>
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
