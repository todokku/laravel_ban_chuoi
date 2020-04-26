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
                        <li class="category3"><span>Giỏ hàng</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="cart-area-start">
    <div class="container">
        <!-- Shopping Cart Table -->
        <div class="area-title">
            <h2>Danh sách sản phẩm giỏ hàng</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên sản phẩm</th>
                            <th>Hình ảnh</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                            <th>Thao tác</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            @foreach($products as $key => $product)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$product->name}}</td>
                                <td><img src="{{asset(pare_url_file_home($product->options['avatar']))}}" class="img-responsive" alt=""></td>
                                <td>{{formatPrice($product->price)}}</td>
                                <td>{{$product->qty}}</td>
                                <td>{{formatPrice($product->qty * $product->price)}}</td>
                                <td>
                                    <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt"></i> Sửa</a>
                                    <a class="btn btn-danger btn-sm" href="{{ route('detele.shopping.cart', $key) }}"><i class="fas fa-trash"></i> Xóa</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                            @endforeach
                        </tbody>
                        
                    </table>
                    <h5 class="pull-right">Tổng tiền cần thanh toán: {{Cart::subtotal()}} VNĐ
                        <a href="{{route('get.checkout.shopping.cart')}}">
                            <button type="button" class="btn btn-warning">Thanh toán</button>
                        </a>
                    </h5>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection