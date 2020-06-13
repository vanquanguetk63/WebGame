@extends('admin_layout')
@section('admin_content')

<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Các Game Đang Bán
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        <select class="input-sm form-control w-sm inline v-middle">
          <option value="0">Bulk action</option>
          <option value="1">Delete selected</option>
          <option value="2">Bulk edit</option>
          <option value="3">Export</option>
        </select>
        <button class="btn btn-sm btn-default">Apply</button>                
      </div>
      <div class="col-sm-4">
      </div>
    </div>
    <div class="table-responsive">

      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              
            </th>
            <th>Tên Game</th>
            <th>Mô Tả</th>
            <th>Nội Dung</th>
            <th>Giá</th>
            <th>Hình Ảnh</th>
            <th>Trạng Thái</th>
            <th>Thể Loại</th>
            <th>Nhà Phát hành</th>
            <th style="width:15px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($all_game as $key => $game)
          <tr>
            <td><i></i></td>
            <td>{{ $game->Game_name}}</td>
            <td>{{ $game->Game_desc}}</td>
            <td>{{ $game->Game_content}}</td>
            <td>{{ $game->Game_price}}</td>
            <td><image src="public/uploadimage/{{$game->Game_image}}" height="300" width="200"></td>
            <td>{{ $game->Game_status}}</td>
            <td>{{ $game->category_name}}</td>
            <td>{{ $game->communication_name}}</td>
           
          
          <td>
              <a href="{{URL::to('/edit-game/'.$game->Game_id)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i></a>
               <a onclick="return confirm('Bạn Có Chắc Là Muốn Xóa Không ?')" href="{{URL::to('/delete-game/'.$game->Game_id)}}" class="active styling-edit" ui-toggle-class="">
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