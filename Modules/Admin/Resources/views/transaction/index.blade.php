@extends('admin::layouts.master') @section('content')
<div class="content-wrapper" style="min-height: 1200.88px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Danh sách đơn hàng</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Danh sách đơn hàng</li>
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
                        <h3 class="card-title">Danh sách đơn hàng</h3>
                        <a href="" class="btn btn-sm btn-secondary float-right">Thêm đơn hàng</a>
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
                                                <th>#</th>
                                                <th>Tên khách hàng</th>
                                                <th>Địa chỉ</th>
                                                <th>Số điện thoại</th>
                                                <th>Tổng tiền</th>
                                                <th>Trạng thái</th>
                                                <th>Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(isset($transactions))
                                                @foreach($transactions as $transaction)
                                                    <tr role="row" class="odd">
                                                        <td>{{$transaction->id}}</td>
                                                        <td>{{$transaction['getNameUserTransactions']['name']}}</td>
                                                        <td>{{$transaction->transactions_address}}</td>
                                                        <td>{{$transaction->transactions_phone}}</td>
                                                        <td>{{$transaction->transactions_total}}</td>
                                                        <td>{{$transaction->transactions_status}}</td>
                                                        <td class="sorting_1">
                                                            <a class="btn btn-info btn-sm js_view_orders" data-id="{{$transaction->id}}" href="{{route('admin.get.view.orders', $transaction->id)}}"><i class="fas fa-pencil-alt"></i> Xem</a>
                                                            <a class="btn btn-danger btn-sm" href=""><i class="fas fa-trash"></i> Xóa</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                                
                                <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Chi tiết đơn hàng <b class="get-transactions-id"></b></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                            
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Understood</button>
                                      </div>
                                    </div>
                                  </div>
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

