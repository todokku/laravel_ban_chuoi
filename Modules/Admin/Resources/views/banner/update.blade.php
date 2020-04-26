@extends('admin::layouts.master') @section('content')
<div class="content-wrapper" style="min-height: 1244.06px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Cập nhật banner</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Cập nhật banner</li>
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
                    <h3 class="card-title">Cập nhật banner</h3>
                </div>
                <form class="form-horizontal">
                    <div class="row row-create-product">
                        <div class="col-md-12">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="banner_name" class="col-sm-2 col-form-label">Tiêu đề banner</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="banner_name" name="banner_name" placeholder="Tiêu đề banner" value="{{ old('banner_name', isset($banner->banner_name) ?  $banner->banner_name : '')}}">
                                        @if($errors->has('banner_name'))
                                            <div class="error-text">
                                                {{$errors->first('banner_name')}}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="banner_thumbnail" class="col-sm-2 col-form-label">Hình ảnh</label>
                                    <div class="col-sm-10">
                                        <div class="custom-file">
                                

                                            <input type="file" data-icon="false" name="banner_thumbnail" class="form-control">
                                            
                                        </div>                          
                                    </div>
                                </div>
                            </div>   
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">Cập nhật</button>
                        <button type="button" class="btn btn-default float-right"><a href="{{ route('admin.get.list.banner') }}">Hủy</a></button>
                    </div>
                </form>
            </div>
        </form>
    </section>
</div>
@stop
