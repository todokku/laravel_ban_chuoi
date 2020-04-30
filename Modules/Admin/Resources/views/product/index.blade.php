@extends('admin::layouts.master') @section('content')
<div class="content-wrapper" style="min-height: 1200.88px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Danh sách sản phẩm</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Danh sách sản phẩm</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content-header">
        @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
        @endif
    <section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Danh sách sản phẩm</h3>
                        
                        <!-- <div class="container"> -->
                            
                        <!-- </div> -->
                        <a href="{{ route('admin.get.create.product') }}" class="btn btn-sm btn-secondary float-right">Thêm sản phẩm</a>
                    </div>
                    <div class="card-header">
                        <form action="">
                            <div class="row">    
                                <div class="col-sms-12">
                                    <div class="input-group">
                                        <div class="input-group-btn search-panel">
                                            <select class="form-control" name="cate">
                                                <option value="0" selected="">Danh mục sản phẩm</option>
                                                @foreach($categories as $category)
                                                <option value="{{$category->id}}" {{\Request::get('cate') == $category->id ? "selected='selected'" : ""}}>{{$category->categories_name}}</option>
                                                @endforeach
                                            
                                            </select>
                                        </div>
                                        <input type="text" class="form-control" name="name" placeholder="Tên sản phẩm" value="{{ \Request::get('name') }}">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="submit">
                                            <span class="fas fa-search"></span></button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12 col-md-6"></div>
                                <div class="col-sm-12 col-md-6"></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="example2" class="table table-bordered table-hover dataTable dtr-inline"
                                        role="grid" aria-describedby="example2_info">
                                        <thead>
                                            <tr role="row">
                                                <th>Tên sản phẩm</th>
                                                <th>Hình ảnh</th>
                                                <th>Loại sản phẩm</th>
                                                <th>Giá bán</th>
                                                <th>Trạng thái</th>
                                                <th>Nổi bật</th>
                                                <th>Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(isset($products))
                                                @foreach($products as $product)
                                                    <tr role="row" class="odd">
                                                        <td>{{$product->product_name}}</td>
                                                        <td>
                                                            <img src="{{pare_url_file($product->product_avatar)}}" alt="" class="thumnail-pos-system-2020">
                                                        </td>
                                                        <td>{{isset($product->category->categories_name) ? $product->category->categories_name : ''}}</td>
                                                        <td>{{$product->formatPrice($product->product_price)}}</td>
                                                        <td>
                                                            <a href="{{ route('admin.get.action.product', ['active', $product->id])}}">
                                                                <span class="btn {{$product->getStatus($product->product_active)['class']}} btn-sm">{{$product->getStatus($product->product_active)['name']}}</span>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a href="{{ route('admin.get.action.product', ['hot', $product->id])}}">
                                                                <span class="btn {{$product->getHot(['hot',$product->id])['class']}} btn-sm">{{$product->getHot(['hot',$product->id])['name']}}</span>
                                                            </a>
                                                        </td>
                                                        <td class="sorting_1">
                                                            <a class="btn btn-info btn-sm" href="{{ route('admin.get.edit.product', $product->id) }}"><i class="fas fa-pencil-alt"></i> Sửa</a>
                                                            <a class="btn btn-danger btn-sm" href="{{ route('admin.get.delete.product', $product->id) }}"><i class="fas fa-trash"></i> Xóa</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                           
                            <div class="row">
                                <div class="col-sm-12 col-md-12">
                                    <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                                        {!! $products->render() !!}
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
@stop