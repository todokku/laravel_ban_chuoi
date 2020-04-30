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
                        <li class="category3"><span>Thanh toán</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container wrapper">
    <div class="row cart-body">
        <form class="form-horizontal" method="POST" action="">
        {{ csrf_field()}}
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-push-6 col-sm-push-6">
                <!--REVIEW ORDER-->
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Danh sách sản phẩm 
                    </div>
                    <div class="panel-body">
                        @foreach($products as $product)
                        
                        <div class="form-group">
                            <div class="col-sm-3 col-xs-3">
                                <img class="img-responsive"
                                    src="{{asset(pare_url_file_home($product->options['avatar']))}}" />
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <div class="col-xs-12">{{$product->name}}</div>
                                <div class="col-xs-12"><small>Số lượng:<span>{{$product->qty}}</span></small></div>
                            </div>
                            <div class="col-sm-3 col-xs-3 text-right">
                                <h6>{{formatPrice($product->price)}}</h6>
                            </div>
                        </div>
                        @endforeach
                        <div class="form-group">
                            <hr />
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <strong>Tổng cộng</strong>
                                <div class="pull-right"><span>{{\Cart::subtotal()}} VNĐ</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--REVIEW ORDER END-->
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-pull-6 col-sm-pull-6">
                <!--SHIPPING METHOD-->
                <div class="panel panel-info">
                    <div class="panel-heading">Thông tin thanh toán</div>
                    <div class="panel-body">
                    
                        <div class="form-group">
                            <div class="col-md-12"><strong>Họ tên:</strong></div>
                            <div class="col-md-12">
                                <input type="text" name="name" class="form-control" value="{{get_data_user('web','name')}}" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12"><strong>Địa chỉ</strong></div>
                            <div class="col-md-12"><input type="text" name="address" class="form-control" value="" /></div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12"><strong>Email:</strong></div>
                            <div class="col-md-12">
                                <input type="text" name="email" class="form-control" value="{{get_data_user('web','email')}}" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12"><strong>Số điện thoại</strong></div>
                            <div class="col-md-12">
                                <input type="text" name="phone" class="form-control" value="{{get_data_user('web','phone')}}" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12"><strong>Ghi chú</strong></div>
                            <div class="col-md-12">
                               <textarea name="note" id="note" cols="30" rows="4" class="form-control"></textarea>
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success">Xác nhận thanh toán</button>
                            </div> 
                        </div>
                    </div>
                </div>
                <!--SHIPPING METHOD END-->
            </div>

        </form>
    </div>
</div>
@endsection