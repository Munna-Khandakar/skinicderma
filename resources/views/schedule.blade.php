@extends('layouts.admin')
@section('content')
<div class="content">
                <div class="row">
						<div class="col-md-12">
							<div class="card-box">
								<h4 class="card-title">Top line tabs</h4>
								<ul class="nav nav-tabs nav-tabs-top">
									<li class="nav-item"><a class="nav-link active" href="#top-tab1" data-toggle="tab">Today</a></li>
									<li class="nav-item"><a class="nav-link" href="#top-tab2" data-toggle="tab">Tomorrow</a></li>
									<li class="nav-item"><a class="nav-link" href="#top-tab3" data-toggle="tab">Day after Tomorrow</a></li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane show active" id="top-tab1">
				<div class="row">						
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-striped custom-table">
								<thead>
									<tr>
										<th>Serial no</th>
										<th>Patient Name</th>
                                        <th>Gender</th>
                                        <th>Phone</th>
										<th>Email</th>
										<th>Time</th>
									</tr>
								</thead>
								<tbody>
								<?php $number = 01; ?>
								@foreach($today as $patient)
									<tr>
										<td>{{ $number }}</td>
										<td><img width="28" height="28" src="admin/assets/img/user.jpg" class="rounded-circle m-r-5" alt="">{{ $patient->name }}</td>
										<td>{{ $patient->gender }}</td>
										<td>{{ $patient->phone }}</td>
										<td>{{ $patient->email }}</td>
										<td>{{ date("g:i a", strtotime($patient->time)) }}</td>
									</tr>
									<?php $number++; ?>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
									<div class="tab-pane" id="top-tab2">
										<div class="row">
											<div class="col-md-12">
												<div class="table-responsive">
													<table class="table table-striped custom-table">
														<thead>
															<tr>
																<th>Serial no</th>
																<th>Patient Name</th>
																<th>Gender</th>
																<th>Phone</th>
																<th>Email</th>
																<th>Time</th>
															</tr>
														</thead>
														<tbody>
														<?php $number = 01; ?>
														@foreach($tomorrow as $patient)
															<tr>
																<td>{{ $number }}</td>
																<td><img width="28" height="28" src="admin/assets/img/user.jpg" class="rounded-circle m-r-5" alt="">{{ $patient->name }}</td>
																<td>{{ $patient->gender }}</td>
																<td>{{ $patient->phone }}</td>
																<td>{{ $patient->email }}</td>
																<td>{{ date("g:i a", strtotime($patient->time)) }}</td>
															</tr>
															<?php $number++; ?>
															@endforeach
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane" id="top-tab3">
										<div class="row">
											<div class="col-md-12">
												<div class="table-responsive">
													<table class="table table-striped custom-table">
														<thead>
															<tr>
																<th>Serial no</th>
																<th>Patient Name</th>
																<th>Gender</th>
																<th>Phone</th>
																<th>Email</th>
																<th>Time</th>
															</tr>
														</thead>
														<tbody>
														<?php $number = 01; ?>
														@foreach($dayaftertom as $patient)
															<tr>
																<td>{{ $number }}</td>
																<td><img width="28" height="28" src="admin/assets/img/user.jpg" class="rounded-circle m-r-5" alt="">{{ $patient->name }}</td>
																<td>{{ $patient->gender }}</td>
																<td>{{ $patient->phone }}</td>
																<td>{{ $patient->email }}</td>
																<td>{{ date("g:i a", strtotime($patient->time)) }}</td>
															</tr>
															<?php $number++; ?>
															@endforeach
														</tbody>
													</table>
												</div>
											</div>
										</div>
						
									</div>
								</div>
							</div>
						</div>
				</div>
            </div>
@endsection