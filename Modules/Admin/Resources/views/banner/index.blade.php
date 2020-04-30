@extends('admin::layouts.master') @section('content')
<div class="content-wrapper" style="min-height: 1200.88px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Danh sách banner</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Danh sách banner</li>
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
                        <h3 class="card-title">Danh sách banner</h3>
                        <a href="{{ route('admin.get.create.banner') }}" class="btn btn-sm btn-secondary float-right">Thêm banner</a>
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
                                                <th>Tên banner</th>
                                                <th>Hình ảnh</th>
                                                <th>Trạng thái</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(isset($banner))
                                                @foreach($banner as $banner)
                                                    <tr role="row" class="odd">
                                                        <td>{{$banner->banner_name}}</td>
                                                        <td>
                                                            <img src="{{pare_url_file($banner->banner_thumbnail)}}" alt="" class="banner-pos-system-2020">
                                                        </td>
                                                        <td class="sorting_1">
                                                            <a class="btn btn-info btn-sm" href="{{ route('admin.get.edit.banner', $banner->id) }}"><i class="fas fa-pencil-alt"></i> Sửa</a>
                                                            <a class="btn btn-danger btn-sm" href="{{ route('admin.get.delete.banner', $banner->id) }}"><i class="fas fa-trash"></i> Xóa</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                        </tbody>
                                    </table>
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