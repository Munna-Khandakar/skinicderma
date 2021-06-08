@extends('layouts.admin')
@section('content')
<div class="content">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
							<span class="dash-widget-bg1"><i class="fa fa-user-md" aria-hidden="true"></i></span>
							<div class="dash-widget-info text-right">
								<h3>{{$doctor_count}}</h3>
								<span class="widget-title1">Doctors <i class="fa fa-check" aria-hidden="true"></i></span>
							</div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg2"><i class="fa fa-heartbeat"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3>{{$patient_count}}</h3>
                                <span class="widget-title2">Patients <i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg3"><i class="fa fa-stethoscope" aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3>{{$appointment_count}}</h3>
                                <span class="widget-title3">Appointment <i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg4"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3>618</h3>
                                <span class="widget-title4">Pending <i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div> --}}
                </div>
                
				<div class="row">
					<div class="col-12 col-md-6 col-lg-8 col-xl-8">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title d-inline-block">New Patients </h4> <a href="patients.html" class="btn btn-primary float-right">View all</a>
							</div>
							<div class="card-block">
								<div class="table-responsive">
									<table class="table mb-0 new-patient-table">
										<tbody>
                                            @foreach($data as $patient)
											<tr>
                                                 @if( $patient->checked == 1)
                                                 
                                                <td>
													<img width="28" height="28" class="rounded-circle" src="admin/assets/img/user.jpg" alt=""> 
													<h2 class="check">{{ $patient->name }}</h2>
												</td>
												<td class="check">{{ $patient->email }}</td>
                                                <td class="check">{{ $patient->phone }}</td>
                                                <td><button class="btn btn-light btn-primary-two float-right">Done</button></td>
                                                
                                                @else
                                                <td>
													<img width="28" height="28" class="rounded-circle" src="admin/assets/img/user.jpg" alt=""> 
													<h2>{{ $patient->name }}</h2>
												</td>
												<td>{{ $patient->email }}</td>
                                                <td>{{ $patient->phone }}</td>
                                                <td><button class="btn btn-primary btn-primary-two float-right" id="edit" data-toggle="modal" data-target="#doctor_advise"data-id="{{ $patient->id }}"data-name="{{ $patient->name }}"data-email="{{ $patient->email}}"data-phone="{{ $patient->phone}}"data-gender="{{ $patient->gender}}">Action</button></td>
                                                @endif
                                            </tr>
                                            @endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="card member-panel">
							<div class="card-header bg-white">
								<h4 class="card-title mb-0">Doctors</h4>
							</div>
                            <div class="card-body">
                                <ul class="contact-list">
                                    @foreach (App\Models\User::with('profile')->get() as $user)
                                        
                                    @if($user->isOnline())

                                    <li>
                                        <div class="contact-cont">
                                            <div class="float-left user-img m-r-10">
                                                @if ($user->profile==null)
                                                <a href="{{ url('/profile/'.$user->id) }}" title="{{$user->name}}"><img src="admin/assets/img/user.jpg" alt="" class="w-40 rounded-circle"><span class="status online"></span></a>
                                                @else
                                                <a href="{{ url('/profile/'.$user->id) }}" title="{{$user->name}}"><img src="{{asset($user->profile['img'])}}" alt="" class="w-40 rounded-circle"><span class="status online"></span></a>
                                                @endif
                                            </div>
                                            <div class="contact-info">
                                                <span class="contact-name text-ellipsis">{{$user->name}}</span>

                                                @if ($user->profile==null)
                                                  <span class="contact-date">Not set</span>
                                                @else
                                                   <span class="contact-date">{{$user->profile['occupation']}}</span>
                                                @endif
                                               
                                            </div>
                                        </div>
                                    </li>
                                   @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
              
            </div>
<!-- model  -->
            <div id="doctor_advise" class="modal fade delete-modal" role="dialog">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-body text-center">
							<img src="admin/assets/img/sent.png" alt="" width="50" height="46">
                            <h3>You are calling for next appointment on</h3>
                            <form method="POST" class="sign-up-form" action="{{ route('nextAppointment') }}">
                                @csrf 
                            
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Patient Name</label>
                                                <input class="form-control" type="text"  name="name" id="name" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Gender</label>
                                                <input class="form-control" type="hidden"  name="id" id="id" readonly>
                                                <input class="form-control" type="text"  name="gender" id="gender" readonly>
                            
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input class="form-control" type="text"  name="email" id="email" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input class="form-control" type="text"  name="phone" id="phone" readonly>
                            
                                            </div>
                                        </div>
                                    </div>
                                     <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Date</label>
                                                <div class="cal-icon">
                                                    <input type="text" class="form-control datetimepicker" name="date">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Time</label>
                                                <div class="time-icon">
                                                    <input type="text" class="form-control" id="datetimepicker3" name="time">
                                                </div>
                                            </div>
                                        </div>
                                     </div>
                    
                                    <div class="m-t-20 text-center">
                                        <button type="submit" class="btn btn-primary submit-btn" name="action" value="save">Save</button>
                                    </div>
                                    <div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                                        <button type="submit" class="btn btn-danger" name="action" value="finish">Finish</button>
                                   </div>
                                </form>
							
						</div>
					</div>
				</div>
            </div>


            <!-- model  -->
@endsection
