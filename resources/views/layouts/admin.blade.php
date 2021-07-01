<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" type="image/x-icon" href="{{asset('admin/assets/img/icon.png')}}">
    <title>Skinic - Appointment Dashboard</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/bootstrap-datetimepicker.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/style.css')}}">

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>


</head>
<body>
    <div class="main-wrapper">
        <div class="header">
            <div class="header-left">
                <a href="{{ url('/home') }}" class="logo">
                    <span>Skinic Derma</span>
                </a>
            </div>
            <a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">

                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img">

                            @if (Auth::user()->profile==null)
                            <img class="rounded-circle" src="{{asset('admin/assets/img/user.jpg')}}" width="24" alt="Admin">
                            @else
                            @if (Auth::user()->profile->img==null)
                            <img class="rounded-circle" src="{{asset('admin/assets/img/user.jpg')}}" width="24" alt="Admin">
                            @else
                            <img class="rounded-circle" src="{{asset(Auth::user()->profile->img)}}" width="24" alt="Admin">
                            @endif
                            @endif

                            <span class="status online"></span>
                        </span>
                        <span>{{ Auth::user()->name }}</span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('myprofile') }}">My Profile</a>
                        @if(Auth::user()->is_admin==1)
                        <a class="dropdown-item" href="{{route('invite')}}">Invite</a>
                        <a class="dropdown-item" href="{{route('make_admin')}}">Make Admin</a>
                        @if (Route::has('register'))
                        <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                        @endif
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }} </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu float-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="{{ route('myprofile') }}">My Profile</a>
                    <a class="dropdown-item" href="{{route('make_admin')}}">Make Admin</a>
                    @if(Auth::user()->is_admin==1)
                    <a class="dropdown-item" href="{{route('invite')}}">Invite</a>
                    @if (Route::has('register'))
                    <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif

                    @endif
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }} </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>

        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>
                        @if(Auth::user()->is_admin==1)
                        <li>
                            <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>
                        <li>
                            <a href="{{ route('schedule') }}"><i class="fa fa-calendar-check-o"></i> <span>Doctor's Schedule</span></a>
                        </li>
                        <li>
                            <a href="{{ route('appointments') }}"><i class="fa fa-calendar"></i> <span>Today's Appointments</span></a>
                        </li>
                        <li>
                            <a href="{{ route('activities') }}"><i class="fa fa-globe"></i>
                                @if(App\Models\Appointment::whereNull('date')->count())
                                <span class="badge badge-pill bg-primary float-right">{{App\Models\Appointment::whereNull('date')->count()}}</span>
                                @endif
                                <span>Online Appointments</span></a>
                        </li>
                        <li>
                            <a href="{{ route('patients') }}"><i class="fa fa-wheelchair"></i> <span>Patients</span></a>
                        </li>
                        <li>
                            <a href="{{ route('doctors') }}"><i class="fa fa-user-md"></i> <span>Team Members</span></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-money"></i> <span>Accounts</span></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-plus"></i> <span>Med Stock</span></a>
                        </li>
                        <li>
                            <a href="{{ url('/settings') }}"><i class="fa fa-cog"></i> <span>Settings</span></a>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
        <div class="page-wrapper">
            @yield('content')
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="{{asset('admin/assets/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('admin/assets/js/Chart.bundle.js')}}"></script>
    <script src="{{asset('admin/assets/js/chart.js')}}"></script>
    <script src="{{asset('admin/assets/js/app.js')}}"></script>
    <script src="{{asset('admin/assets/js/select2.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/moment.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/bootstrap-datetimepicker.min.js')}}"></script>
    <script>
        $(function() {
            $('#datetimepicker3').datetimepicker({
                format: 'LT'

            });
        });

    </script>
    <script type="text/javascript">
        $(document).on('click', '#edit', function() {

            $('#name').val($(this).data('name'));
            $('#id').val($(this).data('id'));
            $('#gender').val($(this).data('gender'));
            $('#phone').val($(this).data('phone'));
            $('#email').val($(this).data('email'));

            $('#doctor_advise').modal('show');
        });

    </script>

</body>
</html>
