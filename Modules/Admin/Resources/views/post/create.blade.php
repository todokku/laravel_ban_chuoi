@extends('admin::layouts.master') @section('content')
<div class="content-wrapper" style="min-height: 1244.06px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Thêm bài viết</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Thêm bài viết</li>
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
        <form action="{{ route('admin.get.create.post') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Thêm bài viết</h3>
                </div>
                <form class="form-horizontal">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="post_name" class="col-sm-2 col-form-label">Tên bài viết</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="post_name" name="post_name" placeholder="Tên bài viết" value="{{ old('post_name', isset($post->post_name) ?  $post->post_name : '')}}">
                                @if($errors->has('post_name'))
                                    <div class="error-text">
                                        {{$errors->first('post_name')}}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="post_description" class="col-sm-2 col-form-label">Mô tả ngắn</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="post_description" name="post_description" placeholder="Mô tả ngắn" value="{{ old('post_description', isset($post->post_description) ?  $post->post_description : '')}}">
                                @if($errors->has('post_description'))
                                    <div class="error-text">
                                        {{$errors->first('post_description')}}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="post_content" class="col-sm-2 col-form-label">Nội dung</label>
                            <div class="col-sm-10">
                                <textarea cols="30" rows="10" type="text" class="form-control" name="post_content" id="post_content" placeholder="Nội dung" value="{{ old('post_content', isset($post->post_content) ?  $post->post_content : '')}}"></textarea>
                                @if($errors->has('post_content'))
                                    <div class="error-text">
                                        {{$errors->first('post_content')}}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="post_avatar" class="col-sm-2 col-form-label">Hình ảnh</label>
                            <div class="col-sm-10">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="post_avatar" value="{{ old('post_avatar', isset($post->post_avatar) ?  $post->post_avatar : '')}}">
                                    <label class="custom-file-label" for="post_avatar">{{ old('post_avatar', isset($post->post_avatar) ?  $post->post_avatar : '')}}</label>
                                </div>                              
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">Thêm mới</button>
                        <button type="button" class="btn btn-default float-right"><a href="{{ route('admin.get.list.post') }}">Hủy</a></button>
                    </div>
                </form>
            </div>
        </form>
    </section>
</div>
@stop