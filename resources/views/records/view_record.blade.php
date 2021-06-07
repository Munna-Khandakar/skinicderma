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
                                    <th>Activity</th>
                                    <th>Activity</th>
                                    <th>Due</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($records as $record)
                                <tr>
                                    <td>{{$record->activity01}}</td>
                                    <td>{{$record->activity02}}</td>
                                    <td>
                                        @if ($record->due)
                                        <label class="badge badge-danger">{{$record->due}}</label>
                                        @else
                                        <label class="badge badge-success">Clear</label>
                                        @endif

                                    </td>
                                    <td>{{$record->created_at->format('d/m/Y')}}</td>
                                    <td>
                                        {{-- onclick="window.location='{{ route('view_record',['id' => $patient->id]) }}'" --}}
                                        <button class="btn btn-outline-primary" onclick="window.location='{{ route('clear_due',['id' => $record->id]) }}'">Clear Due</button>
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
