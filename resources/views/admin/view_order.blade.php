@extends('admin_layout')
@section('admin_content')




<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Chi Tiết Đơn Hàng
    </div>
    
    <div class="table-responsive">

      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              
            </th>
             <th>Tên Game</th>
             <th>Hình Ảnh</th>
            <th>Số Lượng</th>
            <th>Đơn Giá</th>
            <th>Tổng Tiền</th>
            <th>Tên Người Nhận</th>
            <th>Địa Chỉ</th>
            <th>SĐT Người Nhận</th>
             
           
           
           
           
            
            <th style="width:15px;"></th>
          </tr>
        </thead>
        <tbody>
         @foreach($order_by_id as $value)
          <tr>
            <td><i></i></td>
            <td>{{$value->Game_name}}</td>
            <td><image src="https://webgamebtl.herokuapp.com/public/uploadimage/{{$value->Game_image}}" height="300" width="200"></td>
            <td>{{$value->Game_quantity}}</td>
            <td>{{number_format($value->Game_price).'VNĐ'}}</td>
            <td>
              <?php
                $total= $value->Game_quantity * $value->Game_price;
                echo number_format($total).' '.'VNĐ';

              ?>
            </td>
            <td>{{$value->ship_name}}</td>
            <td>{{$value->ship_address}}</td>
            <td>{{$value->ship_phone}}</td>
           
           

          
  
          </tr>
         @endforeach
        </tbody>
      </table>
    </div>
    
  </div>
</div> 


@endsection