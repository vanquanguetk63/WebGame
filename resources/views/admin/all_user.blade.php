B@extends('admin_layout')
@section('admin_content')

<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Tất Cả Người Dùng
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-4">
      </div>
    </div>
    <div class="table-responsive">

      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              
            </th>
            <th>Tên Người Dùng</th>
            <th>Số Điện Thoại</th>
            <th>Email</th>
            <th>Mật Khẩu</th>
          
            <th style="width:15px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($all_user as $key => $user)
          <tr>
            <td><i></i></td>
            <td>{{ $user->user_name}}</td>
            <td>{{ $user->user_phone}}</td>
            <td>{{ $user->user_email}}</td>
            <td>{{ $user->user_password}}</td>
          <td>
               <a onclick="return confirm('Bạn Có Chắc Là Muốn Xóa Người Này Không ?')" href="{{URL::to('/delete-user/'.$user->user_id)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-times text-danger text"></i>
              </a>
          </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
        
@endsection