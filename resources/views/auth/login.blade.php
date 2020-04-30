@extends('layouts.pos')
@section('content')
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="container-inner">
                    <ul>
                        <li class="home">
                            <a href="">Trang chủ</a>
                            <span><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li class="category3"><span>Đăng nhập</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="customer-login-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <?php //Hiển thị thông báo thành công?>
					@if ( Session::has('success') )
					<div class="alert alert-success alert-dismissible" role="alert">
						<strong>{{ Session::get('success') }}</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							<span class="sr-only">Close</span>
						</button>
					</div>
					@endif
                <?php //Hiển thị thông báo lỗi?>
					@if ( Session::has('error') )
					<div class="alert alert-danger alert-dismissible" role="alert">
						<strong>{{ Session::get('error') }}</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							<span class="sr-only">Close</span>
						</button>
					</div>
					@endif
                @if ($errors->any())
					<div class="alert alert-danger alert-dismissible" role="alert">
						<ul>
							@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
							@endforeach
						</ul>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							<span class="sr-only">Close</span>
						</button>
					</div>
                @endif
                <div class="customer-login my-account">
                    <form role="form" action="{{ url('/login') }}" method="POST">
                        {!! csrf_field() !!}
                        <div class="form-fields">
                            <h2>Đăng nhập</h2>
                            <p class="form-row form-row-wide">
                                <label for="email">Email<span class="required">*</span></label>
                                <input class="form-control" placeholder="Email" name="email" type="text"
                                    value="{{ old('email') }}" autofocus>
                            </p>
                            <p class="form-row form-row-wide">
                                <label for="password">Mật khẩu <span class="required">*</span></label>
                                <input class="form-control" placeholder="Mật khẩu" name="password" type="password"
                                    value="">
                            </p>
                        </div>
                        <div class="form-action">
                            <p class="lost_password">
                                <a href="{{ route('get.register') }}">Đăng ký |</a>
                                <a href="#">Quên mật khẩu</a>
                            </p>
                            <div class="actions-log">
                                <input type="submit" class="button" name="login" value="Đăng nhập">
                            </div>
                            <label for="rememberme" class="inline">
                                <input name="rememberme" type="checkbox" id="rememberme" value="forever"> Remember me
                            </label>
                        </div>
                    </form>
                </div>
            </div>
            <!-- <div class="col-md-6 col-xs-12">
				<div class="customer-register my-account">
					<form method="post" class="register">
						<div class="form-fields">
							<h2>Register</h2>
							<p class="form-row form-row-wide">
								<label for="reg_email">Email address <span class="required">*</span></label>
								<input type="email" class="input-text" name="email" id="reg_email" value="">
							</p>
							<p class="form-row form-row-wide">
								<label for="reg_password">Password <span class="required">*</span></label>
								<input type="password" class="input-text" name="password" id="reg_password">
							</p>
							<div style="left: -999em; position: absolute;">
								<label for="trap">Anti-spam</label>
								<input type="text" name="email_2" id="trap" tabindex="-1">
							</div>
						</div>
						<div class="form-action">
							<div class="actions-log">
								<input type="submit" class="button" name="register" value="Register">
							</div>
						</div>
					</form>
				</div>
			</div> -->
        </div>
    </div>
</div>

@endsection