@extends('layouts.admin')
@section('content')
<div class="content">
                <div class="row">
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Doctors</h4>
                    </div>
                    @if(Auth::user()->is_admin==1)
                    <div class="col-sm-8 col-9 text-right m-b-20">
                         @if (Route::has('register'))
                             <a href="{{ route('register') }}" class="btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i>{{ __('Add Doctor') }}</a>
                         @endif
                    </div>
                    @endif
                </div>

               
				<div class="row doctor-grid">
                    @foreach($doctor as $data)
                    <div class="col-md-4 col-sm-4  col-lg-3">
                        <div class="profile-widget">
                            <div class="doctor-img">
                                @if($data->img==null)
                                <a class="avatar" href="{{ url('/profile/'.$data->id) }}"><img alt="" src="{{asset('admin/assets/upload/doctor.png')}}"></a>
                                @else
                                <a class="avatar" href="{{ url('/profile/'.$data->id) }}"><img alt="" src="{{asset($data->img)}}"></a>
                                @endif
                            </div>
                            @if(Auth::user()->is_admin==1)
                            <div class="dropdown profile-action">
                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="{{ url('/profile/'.$data->id) }}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                    <a class="dropdown-item" onclick="return confirm('Are you sure?')" href="{{ url('/delete/doctor/'.$data->id) }}"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                </div>
                            </div>
                            @endif
                            <h4 class="doctor-name text-ellipsis"><a href="{{ url('/profile/'.$data->id) }}">{{$data->name}}</a></h4>
                            <div class="doc-prof">{{$data->occupation}}</div>
                            <div class="user-country">
                                <i class="fa fa-map-marker"></i> {{$data->address}}
                            </div>
                        </div>
                    </div>
                    
                    @endforeach
                </div>
                
               
            </div>
@endsection