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
            <h4 class="page-title">Settings</h4>
        </div>
    </div>

    <div class="content-wrapper">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <form method="POST" class="sign-up-form" action="{{ route('change_settings') }}">
                            @csrf
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Starting Hour</label>
                                    <div class="time-icon">
                                        <input type="text" class="form-control" id="datetimepicker3" name="starting_hour" value={{$starting_hour}}>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Duration</label>
                                    <input type="number" class="form-control" name="office_duration" value={{$office_duration}}>
                                </div>
                                <div class="m-t-20 text-center">
                                    <button type="submit" class="btn btn-primary submit-btn" name="action" value="save">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>
@endsection
