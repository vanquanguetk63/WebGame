@extends('admin_layout')
@section('admin_content')

 <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm Game
                        </header>
                        <div class="panel-body">
                           
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/save-game')}}" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                               
                                 <div class="form-group">
                                    <label for="exampleInputEmail">Tên Game </label>
                                    <input type="text"  name="Book_name" class="form-control" id="exampleInputEmail" >
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail">Mô Tả </label>
                                    <input type="text"  name="Book_desc" class="form-control" id="exampleInputEmail" >
                                </div>
                                   <div class="form-group">
                                    <label for="exampleInputPassword1">Nội Dung </label>
                                    <textarea style="resize: none" rows="8" class="form-control" name="Book_content"id="exampleInputPassword1" ></textarea>
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail">Giá </label>
                                    <input type="text"  name="Book_price" class="form-control" id="exampleInputEmail" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail">Ảnh </label>
                                    <input type="file"  name="Book_image" class="form-control" id="exampleInputEmail" >
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail">Trạng Thái </label>
                                    <input type="text"  name="Book_status" class="form-control" id="exampleInputEmail" >
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
                                     <label for="exampleInputEmail">Nền Tảng </label>
                                      <select  name="NPH_game" class="input-sm form-control input-sm m-bot15">
                                         @foreach($NPH_game as $key=>$NPH)
                                         <option value="{{$NPH->communication_id}}">{{$NPH->communication_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                              
                               
                               
                                <button type="submit" name="add_game" class="btn btn-info">Thêm Game</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
        
@endsection