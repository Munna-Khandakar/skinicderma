@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-sm-4 col-3">
            <h4 class="page-title">Activities</h4>
            <h5 class="page-sub-title">These Patient's records are not saved...</h5>
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
                    @foreach ($patients as $patient)
                    <tr>
                        <td><img width="28" height="28" src="admin/assets/img/user.jpg" class="rounded-circle m-r-5" alt=""> {{ $patient -> name}} </td>
                        <td>{{$patient->email}}</td>
                        <td>{{$patient->phone}}</td>
                        <td>{{$patient->gender}}</td>
                        <td>{{$patient->date}}</td>
                        <td>
                          <button class="btn btn-outline-primary">View</button>
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

@endsection