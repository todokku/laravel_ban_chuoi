@extends('layouts.pos')
@section('content')
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="container-inner">
                    <ul>
                        <li class="home">
                            <a href="{{route('home')}}">Trang chủ</a>
                            <span><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li class="category3"><span>Liên hệ</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main-contact-area">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
						<div class="page-sidebar-area">					
							<!-- popular tag start -->
							<aside class="widge-topbar">
								<div class="bar-title">
									<div class="bar-ping"><img src="img/bar-ping.png" alt=""></div>
									<h2>Popular Tags</h2>
								</div>
								<div class="exp-tags">
									<div class="tags">
										<a href="#">camera</a>
										<a href="#">mobile</a>
										<a href="#">electronic</a>
										<a href="#">destop</a>
										<a href="#">tablet</a>
										<a href="#">accessories</a>
										<a href="#">camcorder</a>
										<a href="#">laptop</a>
									</div>
								</div>
							</aside>
							<aside class="sidebar-content">
								<div class="bar-title">
									<div class="bar-ping"><img src="img/bar-ping.png" alt=""></div>
									<h2>Categories</h2>
								</div>
								<ul class="sidebar-tags">
									<li><a href="#">Acsessories</a><span> (14)</span></li>
									<li><a href="#">Afternoon</a><span> (14)</span></li>
									<li><a href="#">Attachment</a><span> (14)</span></li>
									<li><a href="#">Beauty</a><span> (14)</span></li>
								</ul>
							</aside>
							<!-- popular tag end -->
							<!-- vote area start -->
							<div class="community-vote single-sidebar">
								<div class="bar-title">
									<div class="bar-ping"><img src="img/bar-ping.png" alt=""></div>
									<h2>Community</h2>
								</div>
								<p>What is your favorite color ?</p>
								<div class="vote-area">
									<p><input type="radio" value="1" name="vote"><label>Green</label></p>
									<p><input type="radio" value="1" name="vote"><label>Blue</label></p>
									<p><input type="radio" value="1" name="vote"><label>Yellow</label></p>
									<p><input type="radio" value="1" name="vote"><label>Black</label></p>
									<a href="#">Vote</a>
								</div>
							</div>
							<!-- vote area end -->								
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                        @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                        @endif
						<div class="contact-us-area">
							<!-- google-map-area start -->
							<div class="google-map-area">
								<!--  Map Section -->
								<div id="contacts" class="map-area">
									<div class="iframe-map">CHÈN BẢN ĐỒ VÀO ĐÂY</div>
								</div>

							</div>
							<!-- google-map-area end -->
							<!-- contact us form start -->
							<div class="contact-us-form">
								<div class="sec-heading-area">
									<h2>Liên hệ với chứng tôi</h2>
								</div>
								<div class="contact-form">
									<span class="legend">Mời bạn nhập thông tin liên hệ</span>
									<form action="#" method="POST">
                                    {{ csrf_field() }}
										<div class="form-top">
											<div class="form-group col-sm-6 col-md-6 col-lg-5">
												<label>Họ tên <sup>*</sup></label>
												<input type="text" class="form-control" name="contact_name">
											</div>
											<div class="form-group col-sm-6 col-md-6 col-lg-5">
												<label>Email <sup>*</sup></label>
												<input type="email" class="form-control" name="contact_email">
											</div>
											<div class="form-group col-sm-6 col-md-6 col-lg-5">
												<label>Tiêu đề <sup>*</sup></label>
												<input type="text" class="form-control" name ="contact_subject">
											</div>											
											<div class="form-group col-sm-6 col-md-6 col-lg-5">
												<label>Số điện thoại <sup>*</sup></label>
												<input type="text" class="form-control" name="contact_phone">
											</div>	
											<div class="form-group col-sm-12 col-md-12 col-lg-10">
												<label>Nội dung <sup>*</sup></label>
												<textarea class="yourmessage" name="contact_content"></textarea>
											</div>												
										</div>
										<div class="submit-form form-group col-sm-12 submit-review">
											<!-- <a type="submit" class="add-tag-btn">Gửi nội dung</a> -->
                                            <button type="submit" class="btn btn-info">Thêm mới</button>
										</div>
									</form>
								</div>
							</div>
							<!-- contact us form end -->
						</div>					
					</div>
				</div>
			</div>	
		</div>

@endsection