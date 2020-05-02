<footer>
    <!-- top footer area start -->
    <div class="top-footer-area">
        <div class="container">
            <div class="row">
                <?php  if(!empty($setting->short_description)){ ?>
                <div class="col-md-3 col-sm-4">
                    <div class="single-snap-footer">
                        <div class="snap-footer-title">
                            <h4>Giới thiệu</h4>
                        </div>
                        <div class="cakewalk-footer-content">
                            <p class="footer-des">{{ $setting->short_description }}</p>
                            {{-- <a href="#" class="read-more">Read more</a> --}}
                        </div>
                    </div>
                </div>
                <?php } ?>
                {{-- <div class="col-md-3 col-sm-4">
                    <div class="single-snap-footer">
                        <div class="snap-footer-title">
                            <h4>Information</h4>
                        </div>
                        <div class="cakewalk-footer-content">
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Delivery Information</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms & Condition</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4">
                    <div class="single-snap-footer">
                        <div class="snap-footer-title">
                            <h4>Fashion Tags</h4>
                        </div>
                        <div class="cakewalk-footer-content">
                            <ul>
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Login</a></li>
                                <li><a href="#">My Cart</a></li>
                                <li><a href="#">Wishlist</a></li>
                                <li><a href="#">Checkout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 hidden-sm">
                    <div class="single-snap-footer">
                        <div class="snap-footer-title">
                            <h4>Fashion Tags</h4>
                        </div>
                        <div class="cakewalk-footer-content">
                            <ul>
                                <li><a href="#">Sitemap</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Advanced Search</a></li>
                                <li><a href="#">Affiliates</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
                @if (!empty($setting->facebook_url) || !empty($setting->facebook_url))
                <div class="col-md-2 hidden-sm">
                    <div class="single-snap-footer">
                        <div class="snap-footer-title">
                            <h4>Theo dõi chúng tôi</h4>
                        </div>
                        <div class="cakewalk-footer-content social-footer">
                            <ul>
                                @if (!empty($setting->facebook_url))
                                <li><a href="{{ $setting->facebook_url }}" target="_blank"><i
                                        class="fa fa-facebook"></i></a><span> Facebook</span></li>
                                @endif
                                @if (!empty($setting->twitter_url))
                                <li><a href="{{$setting->twitter_url}}" target="_blank"><i
                                            class="fa fa-twitter"></i></a><span> Twitter</span></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
    <!-- top footer area end -->
    <!-- info footer start -->
    <div class="info-footer">
  
            <div class="container">
                <div class="row">
                    <?php  if(!empty($setting->short_description)){ ?>
                        <div class="col-md-3 col-sm-4">
                            <div class="info-fcontainer">
                                <div class="infof-icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="infof-content">
                                    <h3>Địa chỉ</h3>
                                    <p> 
                                        @php
                                            echo $setting->copyright; 
                                        @endphp
                                    </p>
                                </div>
                            </div>
                        </div>
                    @php } @endphp
                    <?php if(!empty($setting->phone_number)){ ?>
                    <div class="col-md-3 col-sm-4">
                        <div class="info-fcontainer">
                            <div class="infof-icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="infof-content">
                                <h3>Số điện thoại</h3>
                                <p>{{ $setting->phone_number }}</p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <?php if(!empty($setting->email)){ ?>
                    <div class="col-md-3 col-sm-4">
                        <div class="info-fcontainer">
                            <div class="infof-icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="infof-content">
                                <h3>Email Hỗ trợ</h3>
                                <p>{{$setting->email}}</p>
                            </div>
                        </div>
                    </div>
                    @php } @endphp
                    <?php if(!empty($setting->opening_from) || !empty($setting->opening_to)){ ?>
                    <div class="col-md-3 hidden-sm">
                        <div class="info-fcontainer">
                            <div class="infof-icon">
                                <i class="fa fa-clock-o"></i>
                            </div>
                            <div class="infof-content">
                                <h3>Giờ mở cửa</h3>
                                <p>Từ {{$setting->opening_from}} đến {{$setting->opening_to}}</p>
                            </div>
                        </div>
                    </div>
                    @php } @endphp
                </div>
            </div>
    </div>
    <!-- info footer end -->
    <!-- banner footer area start -->
    <div class="banner-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-3 nopadding">
                    <div class="single-bannerfooter">
                        <a href="#">
                            <img src="frontend/img/banner/footer-1.jpg" alt="" />
                        </a>
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-3 nopadding">
                    <div class="single-bannerfooter">
                        <a href="#">
                            <img src="frontend/img/banner/footer-2.jpg" alt="" />
                        </a>
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-3 nopadding">
                    <div class="single-bannerfooter">
                        <a href="#">
                            <img src="frontend/img/banner/footer-3.jpg" alt="" />
                        </a>
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-3 nopadding">
                    <div class="single-bannerfooter">
                        <a href="#">
                            <img src="frontend/img/banner/footer-4.jpg" alt="" />
                        </a>
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 hidden-xs nopadding">
                    <div class="single-bannerfooter">
                        <a href="#">
                            <img src="frontend/img/banner/footer-5.jpg" alt="" />
                        </a>
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 hidden-xs nopadding">
                    <div class="single-bannerfooter last-single">
                        <a href="#">
                            <img src="frontend/img/banner/footer-6.jpg" alt="" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner footer area end -->
    <!-- footer address area start -->
    <div class="address-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <address>Copyright © <a href="http://bootexperts.com/">@php  if(!empty($setting->copyright)){ echo $setting->copyright;} @endphp</a> All Rights Reserved
                    </address>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="footer-payment pull-right">
                        <a href="#"><img src="frontend/img/payment.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer address area end -->
</footer>