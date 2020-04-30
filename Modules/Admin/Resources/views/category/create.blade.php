@extends('admin::layouts.master') @section('content')
<div class="content-wrapper" style="min-height: 1244.06px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Thêm danh mục</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Thêm danh mục</li>
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
        <form action="" method="POST">
            {{ csrf_field() }}
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Thêm danh mục</h3>
                </div>
                <form class="form-horizontal">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Tên danh mục</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Tên danh mục" value="{{ old('name') }}">
                                @if($errors->has('name'))
                                    <div class="error-text">
                                        {{$errors->first('name')}}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="icon" class="col-sm-2 col-form-label">Icon</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="icon" name="icon" placeholder="fa fa right" value="{{ old('icon') }}">
                                @if($errors->has('icon'))
                                    <div class="error-text">
                                        {{$errors->first('icon')}}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="categories_title_seo" class="col-sm-2 col-form-label">Meta Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="categories_title_seo" name="categories_title_seo" placeholder="Meta title" value="{{ old('categories_title_seo') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="categories_description_seo" class="col-sm-2 col-form-label">Meta Description</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="categories_description_seo" name="categories_description_seo" placeholder="Meta description" value="{{ old('categories_description_seo') }}">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">Thêm mới</button>
                        <button type="button" class="btn btn-default float-right"><a href="{{ route('admin.get.list.category') }}">Hủy</a></button>
                    </div>
                </form>
            </div>
        </form>
    </section>
</div>
@stop