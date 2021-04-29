<!DOCTYPE html>
<html lang="en">


<!-- register24:03-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/admin/img/favicon.ico">
    <title>Preclinic - Medical & Hospital - Bootstrap 4 Admin Template</title>
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/bootstrap-datetimepicker.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/style.css')}}">
	
</head>

<body>
    <div class="main-wrapper  account-wrapper">
        <div class="account-page">
            <div class="account-center">
                <div class="account-box">
                    <form method="POST" class="sign-up-form" action="{{ route('InvitedUserCreate') }}">
                        @csrf 
                        <div class="account-logo">
                            <a href="https://skinicderma.com/" target="_blank" ><img src="{{asset('user\img\skinic.png')}}" alt="Skinic Logo"></a>
                        </div>
                        @if ($errors->any())
                             @foreach ($errors->all() as $error)
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Error! {{ $error }}</strong> 
                                </div>
                             @endforeach
                            
                        @endif
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" name="token" value="{{$data['token']}}" readonly>
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" class="form-control" name="email" value="{{$data['email']}}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="password">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password">
                        </div>
                        <div class="form-group">
                            <label for="password-confirm">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-primary account-btn" type="submit">Signup</button>
                        </div>
                        <div class="text-center login-link">
                            Already have an account?
                            @if (Route::has('login'))
                                <a href="{{ route('login') }}">{{ __('Login') }}</a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/admin/js/jquery-3.2.1.min.js"></script>
	<script src="assets/admin/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>


<!-- register24:03-->
</html>