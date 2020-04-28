@extends('layouts.pos')
@section('content')
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="container-inner">
                    <ul>
                        <li class="home">
                            <a href="index.html">Home</a>
                            <span><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li class="category3"><span>Shop List</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="product-details-area">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-5 col-xs-12">
                <div class="zoomWrapper">
                    <div id="img-1" class="zoomWrapper single-zoom">
                        <a href="#">
                            <div style="height:450px;width:450px;" class="zoomWrapper"><img id="zoom1"
                                    src="{{asset(pare_url_file_home($product->product_avatar))}}"
                                    data-zoom-image="img/product-details/ex-big-1-1.jpg" alt="big-1"
                                    style="position: absolute;"></div>
                        </a>
                    </div>
                    <div class="single-zoom-thumb">
                        <div class="bx-wrapper" style="max-width: 365px;">
                            <div class="bx-viewport" aria-live="polite"
                                style="width: 100%; overflow: hidden; position: relative; height: 83px;">
                                <ul class="bxslider" id="gallery_01"
                                    style="width: 8215%; position: relative; transition-duration: 0s; transform: translate3d(-380px, 0px, 0px);">
                                    <li class="bx-clone"
                                        style="float: left; list-style: none; position: relative; width: 80px; margin-right: 15px;"
                                        aria-hidden="true">
                                        <a href="#" class="elevatezoom-gallery"
                                            data-image="img/product-details/big-5.jpg"
                                            data-zoom-image="img/product-details/ex-big-5.jpg"><img
                                                src="img/product-details/th-5.jpg" alt="zo-th-5"></a>
                                    </li>
                                    <li class="bx-clone"
                                        style="float: left; list-style: none; position: relative; width: 80px; margin-right: 15px;"
                                        aria-hidden="true">
                                        <a href="#" class="elevatezoom-gallery"
                                            data-image="img/product-details/big-6.jpg"
                                            data-zoom-image="img/product-details/ex-big-6.jpg"><img
                                                src="img/product-details/th-6.jpg" alt="ex-big-3"></a>
                                    </li>
                                    <li class="bx-clone"
                                        style="float: left; list-style: none; position: relative; width: 80px; margin-right: 15px;"
                                        aria-hidden="true">
                                        <a href="#" class="elevatezoom-gallery"
                                            data-image="img/product-details/big-7.jpg"
                                            data-zoom-image="img/product-details/ex-big-7.jpg"><img
                                                src="img/product-details/th-7.jpg" alt="ex-big-3"></a>
                                    </li>
                                    <li class="bx-clone"
                                        style="float: left; list-style: none; position: relative; width: 80px; margin-right: 15px;"
                                        aria-hidden="true">
                                        <a href="#" class="elevatezoom-gallery"
                                            data-image="img/product-details/big-8.jpg"
                                            data-zoom-image="img/product-details/ex-big-8.jpg"><img
                                                src="img/product-details/th-8.jpg" alt="ex-big-3"></a>
                                    </li>
                                    <li style="float: left; list-style: none; position: relative; width: 80px; margin-right: 15px;"
                                        aria-hidden="false">
                                        <a href="#" class="elevatezoom-gallery active" data-update=""
                                            data-image="img/product-details/big-1-1.jpg"
                                            data-zoom-image="img/product-details/ex-big-1-1.jpg"><img
                                                src="img/product-details/th-1-1.jpg" alt="zo-th-1"></a>
                                    </li>
                                    <li class=""
                                        style="float: left; list-style: none; position: relative; width: 80px; margin-right: 15px;"
                                        aria-hidden="false">
                                        <a href="#" class="elevatezoom-gallery"
                                            data-image="img/product-details/big-1-2.jpg"
                                            data-zoom-image="img/product-details/ex-big-1-2.jpg"><img
                                                src="img/product-details/th-1-2.jpg" alt="zo-th-2"></a>
                                    </li>
                                    <li class=""
                                        style="float: left; list-style: none; position: relative; width: 80px; margin-right: 15px;"
                                        aria-hidden="false">
                                        <a href="#" class="elevatezoom-gallery"
                                            data-image="img/product-details/big-1-3.jpg"
                                            data-zoom-image="img/product-details/ex-big-1-3.jpg"><img
                                                src="img/product-details/th-1-3.jpg" alt="ex-big-3"></a>
                                    </li>
                                    <li class=""
                                        style="float: left; list-style: none; position: relative; width: 80px; margin-right: 15px;"
                                        aria-hidden="true">
                                        <a href="#" class="elevatezoom-gallery"
                                            data-image="img/product-details/big-4.jpg"
                                            data-zoom-image="img/product-details/ex-big-4.jpg"><img
                                                src="img/product-details/th-4.jpg" alt="zo-th-4"></a>
                                    </li>
                                    <li class=""
                                        style="float: left; list-style: none; position: relative; width: 80px; margin-right: 15px;"
                                        aria-hidden="true">
                                        <a href="#" class="elevatezoom-gallery"
                                            data-image="img/product-details/big-5.jpg"
                                            data-zoom-image="img/product-details/ex-big-5.jpg"><img
                                                src="img/product-details/th-5.jpg" alt="zo-th-5"></a>
                                    </li>
                                    <li class=""
                                        style="float: left; list-style: none; position: relative; width: 80px; margin-right: 15px;"
                                        aria-hidden="true">
                                        <a href="#" class="elevatezoom-gallery"
                                            data-image="img/product-details/big-6.jpg"
                                            data-zoom-image="img/product-details/ex-big-6.jpg"><img
                                                src="img/product-details/th-6.jpg" alt="ex-big-3"></a>
                                    </li>
                                    <li class=""
                                        style="float: left; list-style: none; position: relative; width: 80px; margin-right: 15px;"
                                        aria-hidden="true">
                                        <a href="#" class="elevatezoom-gallery"
                                            data-image="img/product-details/big-7.jpg"
                                            data-zoom-image="img/product-details/ex-big-7.jpg"><img
                                                src="img/product-details/th-7.jpg" alt="ex-big-3"></a>
                                    </li>
                                    <li class=""
                                        style="float: left; list-style: none; position: relative; width: 80px; margin-right: 15px;"
                                        aria-hidden="true">
                                        <a href="#" class="elevatezoom-gallery"
                                            data-image="img/product-details/big-8.jpg"
                                            data-zoom-image="img/product-details/ex-big-8.jpg"><img
                                                src="img/product-details/th-8.jpg" alt="ex-big-3"></a>
                                    </li>
                                    <li style="float: left; list-style: none; position: relative; width: 80px; margin-right: 15px;"
                                        class="bx-clone" aria-hidden="true">
                                        <a href="#" class="elevatezoom-gallery active" data-update=""
                                            data-image="img/product-details/big-1-1.jpg"
                                            data-zoom-image="img/product-details/ex-big-1-1.jpg"><img
                                                src="img/product-details/th-1-1.jpg" alt="zo-th-1"></a>
                                    </li>
                                    <li class="bx-clone"
                                        style="float: left; list-style: none; position: relative; width: 80px; margin-right: 15px;"
                                        aria-hidden="true">
                                        <a href="#" class="elevatezoom-gallery"
                                            data-image="img/product-details/big-1-2.jpg"
                                            data-zoom-image="img/product-details/ex-big-1-2.jpg"><img
                                                src="img/product-details/th-1-2.jpg" alt="zo-th-2"></a>
                                    </li>
                                    <li class="bx-clone"
                                        style="float: left; list-style: none; position: relative; width: 80px; margin-right: 15px;"
                                        aria-hidden="true">
                                        <a href="#" class="elevatezoom-gallery"
                                            data-image="img/product-details/big-1-3.jpg"
                                            data-zoom-image="img/product-details/ex-big-1-3.jpg"><img
                                                src="img/product-details/th-1-3.jpg" alt="ex-big-3"></a>
                                    </li>
                                    <li class="bx-clone"
                                        style="float: left; list-style: none; position: relative; width: 80px; margin-right: 15px;"
                                        aria-hidden="true">
                                        <a href="#" class="elevatezoom-gallery"
                                            data-image="img/product-details/big-4.jpg"
                                            data-zoom-image="img/product-details/ex-big-4.jpg"><img
                                                src="img/product-details/th-4.jpg" alt="zo-th-4"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="bx-controls bx-has-controls-direction">
                                <div class="bx-controls-direction"><a class="bx-prev" href="">Prev</a><a class="bx-next"
                                        href="">Next</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-sm-7 col-xs-12">
                <div class="product-list-wrapper">
                    <div class="single-product">
                        <div class="product-content">
                            <h2 class="product-name"><a href="#">{{$product->product_name}}</a></h2>
                            <div class="rating-price">
                                <div class="pro-rating">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </div>
                                <div class="price-boxes">
                                    <span class="new-price">{{formatPrice($product->product_price)}}</span>
                                </div>
                            </div>
                            <div class="product-desc">
                                <p>{{$product->product_description}}
                                </p>
                            </div>
                            <p class="availability in-stock">Availability: <span>In stock</span></p>
                            <div class="actions-e">
                                <div class="action-buttons-single">
                                    <div class="inputx-content">
                                        <label for="qty">Số lượng:</label>
                                        <input type="text" name="qty" id="qty" maxlength="12" value="1" title="Qty"
                                            class="input-text qty">
                                    </div>
                                    <div class="add-to-cart">
                                        <a href="#">Thêm vào giỏ</a>
                                    </div>
                                    <div class="add-to-links">
                                        <div class="add-to-wishlist">
                                            <a href="#" data-toggle="tooltip" title=""
                                                data-original-title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                        </div>
                                        <div class="compare-button">
                                            <a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i
                                                    class="fa fa-refresh"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="singl-share">
                                <a href="#"><img src="img/single-share.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="single-product-tab">
                <!-- Nav tabs -->
                <ul class="details-tab">
                    <li class="active"><a href="#home" data-toggle="tab">Chi tiết sản phẩm</a></li>
                    <li class=""><a href="#messages" data-toggle="tab"> Đánh giá</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home">
                        <div class="product-tab-content">
                            <p>{{$product->product_content}}</p>
                            
                        </div>
                    </div>
                    <div class="component-ratings">
                        <h3> Đánh giá sản phẩm </h3>
                        <div class="row">
                            <div class="left-ratings">
                                <div class="ratings-item">
                                    <div class="span-star">
                                        <b>2.5</b>
                                        <span class="class-star fa fa-star"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="right-ratings">
                                <div class="list-ratings">
                                    @for($i = 1; $i <= 5; $i++)
                                        <div class="component-right-ratings">
                                            <div class="i-star"> 
                                                {{$i}} <span class="fa fa-star"></span>
                                            </div>
                                            <div class="line-before">
                                                <div class="bgb-in" style="width: 28%"></div>
                                            </div>
                                            <div class="total-ratings">
                                                <strong class="strong-number-ratings">119</strong> đánh giá
                                            </div>
                                        </div>
                                    @endfor
                                </div>
                            </div>
                            <div class="button-ratings">
                                <button type="submit" class="button-ratings-end">Gửi đánh giá của bạn</button>
                            </div>
                        </div>
                    </div>
                    <div class="choose-ratings">
                        <p class="p-choose-ratings">Chọn đánh giá của bạn</p>
                        <span class="choose-list-ratings">
                            @for ($i = 1; $i <= 5; $i++)
                                <i class="fa fa-star"></i>
                            @endfor
                        </span>
                        <span class="title-choose-ratings">Tốt</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="our-product-area new-product">
    <div class="container">
        <div class="area-title">
            <h2>Sản phẩm mới</h2>
        </div>
        <!-- our-product area start -->
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="features-curosel owl-carousel owl-theme" style="opacity: 1; display: block;">
                        <!-- single-product start -->
                        <div class="owl-wrapper-outer">
                            <div class="owl-wrapper" style="width: 4800px; left: 0px; display: block;">
                                <div class="owl-item" style="width: 300px;">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="single-product first-sale">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-image" src="img/products/product-1.jpg" alt="">
                                                    <img class="secondary-image" src="img/products/product-2.jpg"
                                                        alt="">
                                                </a>
                                                <div class="action-zoom">
                                                    <div class="add-to-cart">
                                                        <a href="#" title="Quick View"><i
                                                                class="fa fa-search-plus"></i></a>
                                                    </div>
                                                </div>
                                                <div class="actions">
                                                    <div class="action-buttons">
                                                        <div class="add-to-links">
                                                            <div class="add-to-wishlist">
                                                                <a href="#" title="Add to Wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                            </div>
                                                            <div class="compare-button">
                                                                <a href="#" title="Add to Cart"><i
                                                                        class="icon-bag"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="quickviewbtn">
                                                            <a href="#" title="Add to Compare"><i
                                                                    class="fa fa-retweet"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$200.00</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
                                                <p>Nunc facilisis sagittis ullamcorper...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 300px;">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="single-product first-sale">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-image" src="img/products/product-5.jpg" alt="">
                                                    <img class="secondary-image" src="img/products/product-6.jpg"
                                                        alt="">
                                                </a>
                                                <div class="action-zoom">
                                                    <div class="add-to-cart">
                                                        <a href="#" title="Quick View"><i
                                                                class="fa fa-search-plus"></i></a>
                                                    </div>
                                                </div>
                                                <div class="actions">
                                                    <div class="action-buttons">
                                                        <div class="add-to-links">
                                                            <div class="add-to-wishlist">
                                                                <a href="#" title="Add to Wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                            </div>
                                                            <div class="compare-button">
                                                                <a href="#" title="Add to Cart"><i
                                                                        class="icon-bag"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="quickviewbtn">
                                                            <a href="#" title="Add to Compare"><i
                                                                    class="fa fa-retweet"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$300.00</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h2 class="product-name"><a href="#">Primis in faucibus</a></h2>
                                                <p>Nunc facilisis sagittis ullamcorper...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 300px;">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="single-product first-sale">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-image" src="img/products/product-9.jpg" alt="">
                                                    <img class="secondary-image" src="img/products/product-10.jpg"
                                                        alt="">
                                                </a>
                                                <div class="action-zoom">
                                                    <div class="add-to-cart">
                                                        <a href="#" title="Quick View"><i
                                                                class="fa fa-search-plus"></i></a>
                                                    </div>
                                                </div>
                                                <div class="actions">
                                                    <div class="action-buttons">
                                                        <div class="add-to-links">
                                                            <div class="add-to-wishlist">
                                                                <a href="#" title="Add to Wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                            </div>
                                                            <div class="compare-button">
                                                                <a href="#" title="Add to Cart"><i
                                                                        class="icon-bag"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="quickviewbtn">
                                                            <a href="#" title="Add to Compare"><i
                                                                    class="fa fa-retweet"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$270.00</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h2 class="product-name"><a href="#">Voluptas nulla</a></h2>
                                                <p>Nunc facilisis sagittis ullamcorper...</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="owl-item" style="width: 300px;">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="single-product first-sale">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-image" src="img/products/product-13.jpg" alt="">
                                                    <img class="secondary-image" src="img/products/product-1.jpg"
                                                        alt="">
                                                </a>
                                                <div class="action-zoom">
                                                    <div class="add-to-cart">
                                                        <a href="#" title="Quick View"><i
                                                                class="fa fa-search-plus"></i></a>
                                                    </div>
                                                </div>
                                                <div class="actions">
                                                    <div class="action-buttons">
                                                        <div class="add-to-links">
                                                            <div class="add-to-wishlist">
                                                                <a href="#" title="Add to Wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                            </div>
                                                            <div class="compare-button">
                                                                <a href="#" title="Add to Cart"><i
                                                                        class="icon-bag"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="quickviewbtn">
                                                            <a href="#" title="Add to Compare"><i
                                                                    class="fa fa-retweet"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$340.00</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h2 class="product-name"><a href="#">Cras neque metus</a></h2>
                                                <p>Nunc facilisis sagittis ullamcorper...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 300px;">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="single-product first-sale">
                                            <span class="sale-text">Sale</span>
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-image" src="img/products/product-4.jpg" alt="">
                                                    <img class="secondary-image" src="img/products/product-5.jpg"
                                                        alt="">
                                                </a>
                                                <div class="action-zoom">
                                                    <div class="add-to-cart">
                                                        <a href="#" title="Quick View"><i
                                                                class="fa fa-search-plus"></i></a>
                                                    </div>
                                                </div>
                                                <div class="actions">
                                                    <div class="action-buttons">
                                                        <div class="add-to-links">
                                                            <div class="add-to-wishlist">
                                                                <a href="#" title="Add to Wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                            </div>
                                                            <div class="compare-button">
                                                                <a href="#" title="Add to Cart"><i
                                                                        class="icon-bag"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="quickviewbtn">
                                                            <a href="#" title="Add to Compare"><i
                                                                    class="fa fa-retweet"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$360.00</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h2 class="product-name"><a href="#">Occaecati cupiditate</a></h2>
                                                <p>Nunc facilisis sagittis ullamcorper...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 300px;">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="single-product first-sale">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-image" src="img/products/product-8.jpg" alt="">
                                                    <img class="secondary-image" src="img/products/product-9.jpg"
                                                        alt="">
                                                </a>
                                                <div class="action-zoom">
                                                    <div class="add-to-cart">
                                                        <a href="#" title="Quick View"><i
                                                                class="fa fa-search-plus"></i></a>
                                                    </div>
                                                </div>
                                                <div class="actions">
                                                    <div class="action-buttons">
                                                        <div class="add-to-links">
                                                            <div class="add-to-wishlist">
                                                                <a href="#" title="Add to Wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                            </div>
                                                            <div class="compare-button">
                                                                <a href="#" title="Add to Cart"><i
                                                                        class="icon-bag"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="quickviewbtn">
                                                            <a href="#" title="Add to Compare"><i
                                                                    class="fa fa-retweet"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$400.00</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h2 class="product-name"><a href="#">Accumsan elit</a></h2>
                                                <p>Nunc facilisis sagittis ullamcorper...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 300px;">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="single-product first-sale">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-image" src="img/products/product-11.jpg" alt="">
                                                    <img class="secondary-image" src="img/products/product-12.jpg"
                                                        alt="">
                                                </a>
                                                <div class="action-zoom">
                                                    <div class="add-to-cart">
                                                        <a href="#" title="Quick View"><i
                                                                class="fa fa-search-plus"></i></a>
                                                    </div>
                                                </div>
                                                <div class="actions">
                                                    <div class="action-buttons">
                                                        <div class="add-to-links">
                                                            <div class="add-to-wishlist">
                                                                <a href="#" title="Add to Wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                            </div>
                                                            <div class="compare-button">
                                                                <a href="#" title="Add to Cart"><i
                                                                        class="icon-bag"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="quickviewbtn">
                                                            <a href="#" title="Add to Compare"><i
                                                                    class="fa fa-retweet"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$280.00</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h2 class="product-name"><a href="#">Pellentesque habitant</a></h2>
                                                <p>Nunc facilisis sagittis ullamcorper...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 300px;">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="single-product first-sale">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-image" src="img/products/product-11.jpg" alt="">
                                                    <img class="secondary-image" src="img/products/product-2.jpg"
                                                        alt="">
                                                </a>
                                                <div class="action-zoom">
                                                    <div class="add-to-cart">
                                                        <a href="#" title="Quick View"><i
                                                                class="fa fa-search-plus"></i></a>
                                                    </div>
                                                </div>
                                                <div class="actions">
                                                    <div class="action-buttons">
                                                        <div class="add-to-links">
                                                            <div class="add-to-wishlist">
                                                                <a href="#" title="Add to Wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                            </div>
                                                            <div class="compare-button">
                                                                <a href="#" title="Add to Cart"><i
                                                                        class="icon-bag"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="quickviewbtn">
                                                            <a href="#" title="Add to Compare"><i
                                                                    class="fa fa-retweet"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$222.00</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
                                                <p>Nunc facilisis sagittis ullamcorper...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single-product end -->
                        <!-- single-product start -->

                        <!-- single-product end -->
                        <!-- single-product start -->

                        <!-- single-product end -->
                        <!-- single-product start -->

                        <!-- single-product end -->
                        <!-- single-product start -->

                        <!-- single-product end -->
                        <!-- single-product start -->

                        <!-- single-product end -->
                        <!-- single-product start -->

                        <!-- single-product end -->
                        <!-- single-product start -->

                        <!-- single-product end -->
                        <div class="owl-controls clickable">
                            <div class="owl-buttons">
                                <div class="owl-prev disabled"><i class="fa fa-angle-left"></i></div>
                                <div class="owl-next"><i class="fa fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- our-product area end -->
    </div>
</div>
@endsection