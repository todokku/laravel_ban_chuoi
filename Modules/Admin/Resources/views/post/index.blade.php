@extends('admin::layouts.master') @section('content')
<div class="content-wrapper" style="min-height: 1200.88px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Danh sách bài viết</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Danh sách bài viết</li>
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
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Danh sách bài viết</h3>
                        <a href="{{ route('admin.get.create.post') }}" class="btn btn-sm btn-secondary float-right">Thêm bài viết</a>
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
                                                <th>Tên bài viết</th>
                                                <th>Hình ảnh</th>
                                                <th>Mô tả</th>
                                                <th>Trạng thái</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(isset($posts))
                                                @foreach($posts as $post)
                                                    <tr role="row" class="odd">
                                                        <td>{{$post->post_name}}</td>
                                                        <td>
                                                            <img src="{{pare_url_file($post->post_avatar)}}" alt="" class="thumnail-pos-system-2020">
                                                        </td>
                                                        <td>{{$post->post_description}}</td>                                                      
                                                        <td class="sorting_1">
                                                            <a class="btn btn-info btn-sm" href="{{ route('admin.get.edit.post', $post->id) }}"><i class="fas fa-pencil-alt"></i> Sửa</a>
                                                            <a class="btn btn-danger btn-sm" href="{{ route('admin.get.delete.post', $post->id) }}"><i class="fas fa-trash"></i> Xóa</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-5">
                                    <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">
                                        Trang {{$posts->currentPage()}} / {{$posts->count()}} bài viết</div>
                                </div>
                                <div class="col-sm-12 col-md-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                                        {!! $posts->render() !!}
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