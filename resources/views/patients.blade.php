@extends('layouts.admin')
@section('content')
<div class="content">
    @if(session()->has('msg'))
    <div class="alert alert-{{session()->get('type')}} alert-dismissible fade show" role="alert">
        <strong>{{ucfirst(session()->get('type'))}}!</strong> {{session()->get('msg')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <div class="row">
        <div class="col-sm-4 col-3">
            <h4 class="page-title">Patients</h4>
        </div>
    </div>
    <form method="POST" class="sign-up-form" action="{{ route('add_patient') }}">
        @csrf
        <div class="row filter-row">
            <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                <div class="form-group form-focus">
                    <label class="focus-label">Name</label>
                    <input type="text" name="name" class="form-control floating" value="{{ old('name') }}" required>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                <div class="form-group form-focus select-focus">
                    <label class="focus-label">Gender</label>
                    <select class="select floating" name='gender'>
                        <option value='0'> -- Select -- </option>
                        <option value='male'>Male</option>
                        <option value='female'>Female</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                <div class="form-group form-focus">
                    <label class="focus-label">Email</label>
                    <input type="email" name='email' class="form-control floating" value="{{ old('email') }}">
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                <div class="form-group form-focus">
                    <label class="focus-label">Phone</label>
                    <input type="text" name='phone' class="form-control floating" value="{{ old('phone') }}" required>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                <button type='submit' class="btn btn-primary btn-block"> ADD </button>
            </div>
        </div>
    </form>
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
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($patients as $patient)
                                <tr>
                                    <td><img width="28" height="28" src="admin/assets/img/user.jpg" class="rounded-circle m-r-5" alt=""> {{ $patient -> name}} </td>
                                    <td>{{$patient->email}}</td>
                                    <td>{{$patient->phone}}</td>
                                    <td>{{$patient->gender}}</td>
                                    <td>
                                        <button class="btn btn-outline-primary" onclick="window.location='{{ route('view_record',['id' => $patient->id]) }}'">View</button>
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
