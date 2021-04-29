@extends('layouts.admin')
@section('content')
<div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Edit Profile</h4>
                    </div>
                </div>
                <form method="POST" action="{{route('saveProfile')}}" enctype="multipart/form-data">
                @csrf
                    <div class="card-box">
                        <h3 class="card-title">Basic Informations</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="profile-img-wrap">
                                    <img class="inline-block" src="{{asset($data['img'])}}" alt="user">
                                    <div class="fileupload btn">
                                        <span class="btn-text">edit</span>
                                        <input class="upload" type="file" name="image">
                                    </div>
                                </div>
                                <div class="profile-basic">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <label class="focus-label">User Name</label>
                                               
                                                <input type="text" class="form-control floating" name="name" value="{{$data['name']}}">
                                         
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <label class="focus-label">Occupation</label>
                                              
                                                <input type="text" class="form-control floating" name="occupation"  value="{{$data['occupation']}}">
                                               
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                              <label class="focus-label">Address</label>
                                             
                                                <input type="text" class="form-control floating"  name="address" value="{{$data['address']}}">
                                           
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                              <label class="focus-label">Phone</label>
                                              
                                                <input type="text" class="form-control floating"  name="phone" value="{{$data['phone']}}">
                                             
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                              <label class="focus-label">Gender</label>
                                                <input type="text" class="form-control floating" name="gender"  value="{{$data['gender']}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="text-center m-t-20">
                        <button class="btn btn-primary submit-btn" type="submit">Save</button>
                    </div>
                </form>
            </div>

@endsection