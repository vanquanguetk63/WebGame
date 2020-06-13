@extends('admin_layout')
@section('admin_content')

 <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Cập Nhật Game
                        </header>
                        <div class="panel-body">
                             @foreach($edit_game as $key => $game)
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/update-game/'.$game->Game_id)}}"  method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                               
                                 <div class="form-group">
                                    <label for="exampleInputEmail">Tên Game </label>
                                    <input type="text"  name="Game_name" class="form-control" id="exampleInputEmail" value="{{$game->Game_name}}">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail">Mô Tả </label>
                                    <input type="text"  name="Game_desc" class="form-control" id="exampleInputEmail" value="{{$game->Game_desc}}">
                                </div>
                                   <div class="form-group">
                                    <label for="exampleInputPassword1">Nội Dung </label>
                                    <textarea style="resize: none" rows="8" class="form-control" name="Game_content"id="exampleInputPassword1" >{{$game->Game_content}}"</textarea>
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail">Giá </label>
                                    <input type="text"  name="Game_price" class="form-control" id="exampleInputEmail"value="{{$game->Game_price}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail">Ảnh </label>
                                    <input type="file"  name="Game_image" class="form-control" id="exampleInputEmail"  >
                                    <img src="{{URL::to('https://webgamebtl.herokuapp.com/public/uploadimage/'.$game->Game_image)}}"height="150" width="150">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail">Trạng Thái </label>
                                    <input type="text"  name="Game_status" class="form-control" id="exampleInputEmail" value="{{$game->Game_status}}" >
                                </div>
                                <div class="form-group">
                                     <label for="exampleInputEmail">Thể Loại Game </label>
                                   <select   name="cate"  class="input-sm form-control input-sm m-bot15">
                                       @foreach($cate_game as $key=>$cate)
                                         <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                       @endforeach

                                    </select>
                                </div>
                                  <div class="form-group">
                                     <label for="exampleInputEmail">Nhà Phát Hành </label>
                                      <select  name="NPH_game" class="input-sm form-control input-sm m-bot15">
                                         @foreach($NPH_game as $key=>$NPH)
                                         <option value="{{$NPH->communication_id }}">{{$NPH->communication_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                              
                                <button type="submit" name="update_game" class="btn btn-info">Cập Nhật Game</button>
                            </form>
                               @endforeach
                            </div>
                      
                        </div>
                    </section>

            </div>
        
@endsection