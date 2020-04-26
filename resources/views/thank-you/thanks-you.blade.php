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
                        <li class="category3"><span>Cảm ơn</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="jumbotron text-center">
  <h1 class="display-3">Cảm ơn bạn đã mua hàng</h1>
  <p class="lead"><strong>Cảm ơn bạn đã mua hàng</strong> quan tâm sản phẩm của bên chúng tôi.</p>
  <hr>
  <p>
    Bạn cần? <a href="">Liên hệ</a>
  </p>
  <p class="lead">
    <a class="btn btn-primary btn-sm" href="{{route('home')}}" role="button">Trở về trang chủ</a>
  </p>
</div>
@endsection