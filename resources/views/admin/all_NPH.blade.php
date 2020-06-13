@extends('admin_layout')
@section('admin_content')

<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt Kê Các Nền Tảng
    </div>
    <div class="row w3-res-tb">
    </div>
    <div class="table-responsive">

      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <!-- <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label> -->
            </th>
            <th>Tên Nền Tảng</th>
            <th>Hình Ảnh</th>
           
           
            
            <th style="width:15px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($all_NPH as $key => $NPH)
          <tr>
            <td><!-- <label class="i-checks m-b-none"><input type="checkbox" name="post[]"> --><i></i><!-- </label> --></td>
            <td>{{ $NPH->communication_name }}</td>
            <td><image src="public/uploadimage/{{$NPH->communication_image}}" height="300" width="200"></td>
          
          <td>
              <a href="{{URL::to('/edit-NPH/'.$NPH->communication_id)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i></a>
               <a onclick="return confirm('Bạn Có Chắc Là Muốn Xóa Không ?')" href="{{URL::to('/delete-NPH/'.$NPH->communication_id)}}" class="active styling-edit" ui-toggle-class="">
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