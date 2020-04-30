@if($orders)
	<table class="table">
        <thead>
        <tr>
            <th>STT</th>
            <th>Tên sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
            <th>Thao tác</th>
        </tr>
        </thead>
        <tbody>
        	<?php $i = 1; ?>
            @foreach($orders as $order)
            
            <tr>
                <td>{{$i}}</td>
                <td>
                    <a href="{{route('get.details.product',[str_slug($order->products->product_name),$order->orders_product_id])}}" target="_blank">{{$order->products->product_name}}</a></td>
                <td><img src="{{pare_url_file($order->products->product_avatar)}}" class="img-responsive" alt="" width="80px"></td>
                <td>{{formatPrice($order->products->product_price)}}</td>
                <td>{{$order->order_qty}}</td>
                <td>{{formatPrice($order->order_qty * $order->products->product_price)}}</td>
                <td>
                    <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt"></i> Sửa</a>
                    <a class="btn btn-danger btn-sm" href="{{route('admin.get.delete.details.orders', $order->id)}}"><i class="fas fa-trash"></i> Xóa</a>
                </td>
            </tr>
            <?php $i++ ?>
            @endforeach
            
        </tbody>
        
    </table>
@endif