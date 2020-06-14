<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
Session_start();

class GameController extends Controller
{
    public function add_game(){
            $cate_game = DB::table('tbl_category_product')->orderby('category_id')->get();
            $NPH_game = DB::table('table_communication')->orderby('communication_id')->get();
            return view('admin.add_game')->with('cate_game',$cate_game)->with('NPH_game',$NPH_game);
    }

    public function all_game(){
        $all_game = DB::table('table_game')
        ->join('tbl_category_product','tbl_category_product.category_id','=','table_game.category_id')
        ->join('table_communication','table_communication.communication_id','=','table_game.communication_id')
        ->orderby('table_game.Game_id')->get();
            $manager_game = view('admin.all_game')->with('all_game',$all_game);
            return view('admin_layout')->with('admin.all_game',$manager_game);
    }

    public function all_game_user(){
        $all_game_user = DB::table('table_game')
        
        ->join('tbl_category_product','tbl_category_product.category_id','=','table_game.category_id')
        ->join('table_communication','table_communication.communication_id','=','table_game.communication_id')
        ->orderby('table_game.Game_id')->get();
         $cate_game = DB::table('tbl_category_product')->orderby('category_id')->get();
        $NPH_game = DB::table('table_communication')->orderby('communication_id')->get();
            $price_game = DB::table('table_game')->orderby('Game_price')->limit(3)->get();
            return view('pages.all_game_user')->with('all_game_user',$all_game_user)->with('cate_game',$cate_game)->with('NPH_game',$NPH_game)->with('price_game',$price_game);
    }


    public function save_game(Request $request){
            $data = array();
            $data['Game_name'] = $request->Game_name;
            $data['Game_desc'] = $request->Game_desc;
            $data['Game_content'] = $request->Game_content;
            $data['Game_price'] = $request->Game_price;
            $data['Game_status'] = $request->Game_status;
            $data['category_id'] = $request->cate;
            $data['communication_id'] = $request->NPH_game;
           
            
            
            $get_image = $request->file('Game_image');

            if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploadimage',$new_image);
            $data['Game_image'] = $new_image;
            DB::table('table_game')->insert($data);
            return Redirect::to('all-game');
            }
            $data['Game_image'] = '';
            if ($data['Game_name']==NULL || $data['Game_desc']==NULL || $data['Game_content']==NULL ||$data['Game_price']==NULL || $data['Game_status']==NULL   ){
                return Redirect::to('add-game');
            }else{
                DB::table('table_game')->insert($data);
                return Redirect::to('all-game');
            }

            
        
    }

    public function edit_game($Game_id){

        $cate_game = DB::table('tbl_category_product')->orderby('category_id')->get();
        $NPH_game = DB::table('table_communication')->orderby('communication_id')->get();
        $edit_game = DB::table('table_game')->where('Game_id',$Game_id)->get();
        $manager_game = view('admin.edit_game')->with('edit_game',$edit_game)->with('cate_game',$cate_game)->with('NPH_game',$NPH_game);
        return view('admin_layout')->with('admin.edit_game',$manager_game);
    }

    public function update_game($Game_id,Request $request){
             $data = array();
            $data['Game_name'] = $request->Game_name;
            $data['Game_desc'] = $request->Game_desc;
            $data['Game_content'] = $request->Game_content;
            $data['Game_price'] = $request->Game_price;
            $data['Game_status'] = $request->Game_status;
            $data['category_id'] = $request->cate;
            $data['communication_id'] = $request->NPH_game;
            
            
            $get_image = $request->file('Game_image');
        
        if($get_image){
                    $get_name_image = $get_image->getClientOriginalName();
                    $name_image = current(explode('.',$get_name_image));
                    $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
                    $get_image->move('public/uploadimage',$new_image);
                    $data['Game_image'] = $new_image;
                    DB::table('table_game')->where('Game_id',$Game_id)->update($data);
        
                    return Redirect::to('all-game');
        }
            
        DB::table('table_game')->where('Game_id',$Game_id)->update($data);
        
        return Redirect::to('all-game');
    }

      public function delete_game($Game_id){
        DB::table('table_game')->where('Game_id',$Game_id)->delete();
        return Redirect::to('all-game');
    }
     

      public function show_Game($Game_id){

            $cate_game = DB::table('tbl_category_product')->orderby('category_id')->get();
            $NPH_game = DB::table('table_communication')->orderby('communication_id')->get();
             $new_game = DB::table('table_game')->orderby('Game_id','desc')->limit(4)->get();
            $show_game = DB::table('table_game')
            ->join('tbl_category_product','tbl_category_product.category_id','=','table_game.category_id')
            ->join('table_communication','table_communication.communication_id','=','table_game.communication_id')
            ->where('table_game.Game_id',$Game_id)->get();



            foreach ($show_game as $key => $value) {
                $category_id = $value->category_id;
            }


            $relate_game = DB::table('table_game')
            ->join('tbl_category_product','tbl_category_product.category_id','=','table_game.category_id')
            ->join('table_communication','table_communication.communication_id','=','table_game.communication_id')
            ->where('tbl_category_product.category_id',$category_id)->whereNotIn('table_game.Game_id',[$Game_id])->get();

            $price_game = DB::table('table_game')->orderby('Game_price')->limit(3)->get();

            return view('pages.game.show_game')->with('cate_game',$cate_game)->with('NPH_game',$NPH_game)->with('show_game',$show_game)->with('relate_game',$relate_game)->with('price_game',$price_game)->with('new_game',$new_game);


      }
}
