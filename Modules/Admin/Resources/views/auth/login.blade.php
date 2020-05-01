<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="icon" href="https://demo.s-cart.org/images/icon.png" type="image/png" sizes="16x16">
        <title>S-Cart System | Login</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="{{asset('backend/assets/login/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('backend/assets/login/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('backend/assets/login/ionicons.min.css')}}">
        <link rel="stylesheet" href="{{asset('backend/assets/login/select2.min.css')}}">
        <link rel="stylesheet" href="{{asset('backend/assets/login/bootstrap-switch.min.css')}}">
        <link rel="stylesheet" href="{{asset('backend/assets/login/AdminLTE.min.css')}}">
        <link rel="stylesheet" href="{{asset('backend/assets/login/blue.css')}}">
        <link rel="stylesheet" href="{{asset('backend/assets/login/login.css')}}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <body class="hold-transition login-page">
        <div class="wrapper">
        <body class="hold-transition login-page">
            <div class="limiter">
                <div class="container-login100">
                    <div class="wrap-login100 main-login">
                        <form action="" method="POST">
                            @csrf
                            <div class="col-md-12">
                                <img src="https://demo.s-cart.org/data/logo/scart-mid.png" alt="logo" class="logo">
                            </div>
                            <div class="login-title-des col-md-12 p-b-41">
                                <a><b>S-Cart System</b></a>
                            </div>
                            <div class="col-md-12 form-group has-feedback 1">
                                <div class="wrap-input100 validate-input form-group ">
                                    <input class="input100 form-control" type="email" placeholder="Email"
                                        name="email" required>
                                    <span class="focus-input100"></span>
                                    <span class="symbol-input100">
                                    <i class="fa fa-user"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-12 form-group has-feedback 1">
                                <div class="wrap-input100 validate-input form-group ">
                                    <input class="input100 form-control" type="password" placeholder="Password"
                                        name="password" required>
                                    <span class="focus-input100"></span>
                                    <span class="symbol-input100">
                                    <i class="fa fa-lock"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="container-login-btn">
                                    <button class="login-btn" type="submit">
                                    Login
                                    </button>
                                </div>
                                <div class="checkbox icheck text-center remember">
                                    <label>
                                    <input type="checkbox" name="remember" value="1">
                                    <b>Remember me</b>
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </body>
</html>