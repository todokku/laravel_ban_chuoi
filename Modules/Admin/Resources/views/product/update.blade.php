@extends('admin::layouts.master') @section('content')
<div class="content-wrapper" style="min-height: 1244.06px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Cập nhật sản phẩm</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Cập nhật sản phẩm</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content-header">
        @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
        @endif
    <section>
    <section class="content">
        <form action="" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Cập nhật sản phẩm</h3>
                </div>
                <form class="form-horizontal">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="product_name" class="col-sm-2 col-form-label">Tên sản phẩm</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Tên sản phẩm" value="{{ old('product_name', $product->product_name) }}">
                                @if($errors->has('product_name'))
                                    <div class="error-text">
                                        {{$errors->first('product_name')}}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="product_description" class="col-sm-2 col-form-label">Mô tả ngắn</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="product_description" placeholder="Mô tả ngắn" value="{{ old('product_description', isset($product->product_description) ?  $product->product_description : '')}}">
                                @if($errors->has('product_description'))
                                    <div class="error-text">
                                        {{$errors->first('product_description')}}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="product_content" class="col-sm-2 col-form-label">Nội dung</label>
                            <div class="col-sm-10">
                                <textarea cols="30" rows="10" type="text" class="form-control" name="product_content" id="product_content" placeholder="Nội dung" value="{{ old('product_content', isset($product->product_content) ?  $product->product_content : '')}}">{{ old('product_content', isset($product->product_content) ?  $product->product_content : '')}}</textarea>
                                @if($errors->has('product_content'))
                                    <div class="error-text">
                                        {{$errors->first('product_content')}}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Loại sản phẩm</label>
                            <div class="col-sm-10">
                                <select name="product_category_id" class="form-control"> 
                                    <option value="">--Chọn loại sản phẩm--</option>
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}" {{$product->product_category_id == $category->id ? "selected" : "" }}>{{$category->categories_name}}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('product_category_id'))
                                    <div class="error-text">
                                        {{$errors->first('product_category_id')}}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="product_price" class="col-sm-2 col-form-label">Giá sản phẩm</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="product_price" placeholder="100000" value="{{ old('product_price',isset($product->product_price) ? $product->product_price : '') }}">
                                @if($errors->has('product_price'))
                                    <div class="error-text">
                                        {{$errors->first('product_price')}}
                                    </div>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="product_sale" class="col-sm-2 col-form-label">% Khuyến mãi</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="product_sale" placeholder="0" value="{{ old('product_sale', isset($product->product_sale) ?  $product->product_sale : '')}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="product_avatar" class="col-sm-2 col-form-label">Hình ảnh</label>
                            <div class="col-sm-10">
                                <div class="custom-file">
                                    <input type="file" class="form-control" name="product_avatar">
                                    
                                </div>                              
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">Cập nhật</button>
                        <button type="button" class="btn btn-default float-right"><a href="{{ route('admin.get.list.product') }}">Hủy</a></button>
                    </div>
                </form>
            </div>
        </form>
    </section>
</div>
@stop