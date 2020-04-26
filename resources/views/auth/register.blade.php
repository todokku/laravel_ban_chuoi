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
                        <li class="category3"><span>Đăng ký</span></li>
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
				<div class="customer-register my-account">
					<form role="form" method="POST" action="{{ url('/register') }}">
						{!! csrf_field() !!}
						<div class="form-fields">
							<h2>Đăng ký</h2>
							<p class="form-row form-row-wide">
								<label for="name">Họ và tên <span class="required">*</span></label>
								<input class="form-control" placeholder="Họ và tên" name="name" type="text" value="{{ old('name') }}" autofocus>
							</p>
							<p class="form-row form-row-wide">
								<label for="email">Email <span class="required">*</span></label>
								<input class="form-control" placeholder="Email" name="email" type="text" value="{{ old('email') }}">
							</p>
							<p class="form-row form-row-wide">
								<label for="password">Mật khẩu <span class="required">*</span></label>
								<input class="form-control" placeholder="Mật khẩu" name="password" type="password">
							</p>
							<p class="form-row form-row-wide">
								<label for="password_confirmation">Xác nhận mật khẩu <span class="required">*</span></label>
								<input class="form-control" placeholder="Xác nhận mật khẩu" name="password_confirmation" type="password">
							</p>
							<p class="form-row form-row-wide">
								<label for="phone">Điện thoại <span class="required">*</span></label>
								<input class="form-control" placeholder="Điện thoại" name="phone" type="text" value="{{ old('phone') }}">
							</p>
						</div>
						<div class="form-action">
							<p class="lost_password">
                                <a href="{{ route('get.login') }}">Quay về đăng nhập</a>
                            </p>
							<div class="actions-log">
								<input type="submit" class="button" name="register" value="Đăng ký">
							</div>
						</div>
					</form>
				</div>
			</div>

        </div>
    </div>
</div>




@endsection
