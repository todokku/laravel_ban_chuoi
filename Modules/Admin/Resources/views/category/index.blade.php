@extends('admin::layouts.master') @section('content')
<div class="content-wrapper" style="min-height: 1200.88px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Danh sách danh mục</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Danh sách danh mục</li>
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
                        <h3 class="card-title">Danh sách danh mục</h3>
                        <a href="{{ route('admin.get.create.category') }}" class="btn btn-sm btn-secondary float-right">Thêm danh mục</a>
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
                                                <th>Tên danh mục</th>
                                                <th>Icon</th>
                                                <th>Meta title</th>
                                                <th>Meta description</th>
                                                <th>Hiển thị</th>
                                                <th>Trạng thái</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(isset($categories))
                                                @foreach($categories as $category)
                                                    <tr role="row" class="odd">
                                                        <td>{{$category->categories_name}}</td>
                                                        <td>{{$category->categories_icon}}</td>
                                                        <td>{{$category->categories_title_seo}}</td>
                                                        <td>{{$category->categories_description_seo}}</td>
                                                        <td>
                                                            <a href="{{ route('admin.get.action.category', ['active', $category->id])}}">
                                                                <span class="btn {{$category->getStatus($category->categories_active)['class']}} btn-sm">{{$category->getStatus($category->categories_active)['name']}}</span>
                                                            </a>
                                                        </td>
                                                        <td class="sorting_1">
                                                            <a class="btn btn-info btn-sm" href="{{ route('admin.get.edit.category', $category->id) }}"><i class="fas fa-pencil-alt"></i> Sửa</a>
                                                            <a class="btn btn-danger btn-sm" href="{{ route('admin.get.delete.category', $category->id) }}"><i class="fas fa-trash"></i> Xóa</a>
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