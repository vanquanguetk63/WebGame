<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
Session_start();

class NPHController extends Controller
{
    public function all_NPH(){
    		$all_NPH = DB::table('table_communication')->get();
    		$manager_NPH = view('admin.all_NPH')->with('all_NPH',$all_NPH);
    		return view('admin_layout')->with('admin.all_NPH',$manager_NPH);
    }
    public function save_NPH(Request $request){
    	$data = array();
    	$data['communication_name'] = $request->communication_name;

            $get_image = $request->file('communnication_image');

            if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploadimage',$new_image);
            $data['communication_image'] = $new_image;
            DB::table('table_communication')->insert($data);
            return Redirect::to('all-NPH');
            }
            $data['communication_image'] = '';
                DB::table('table_communication')->insert($data);
                return Redirect::to('all-NPH');
    }
     public function edit_NPH($communication_id){
        $edit_NPH = DB::table('table_communication')->where('communication_id',$communication_id)->get();
        $manager_NPH = view('admin.edit_NPH')->with('edit_NPH',$edit_NPH);
        return view('admin_layout')->with('admin.edit_NPH',$manager_NPH);
    }

    public function update_NPH($communication_id,Request $request){
        $data = array();
        $data['communication_name'] = $request->communication_name;
        DB::table('table_communication')->where('communication_id',$communication_id)->update($data);
        return Redirect::to('all-NPH');
    }
      public function delete_NPH($communication_id){
        DB::table('table_communication')->where('communication_id',$communication_id)->delete();
        return Redirect::to('all-NPH');
    }


    public function show_NPH_home($communication_id){
            $cate_game = DB::table('tbl_category_product')->orderby('category_id')->get();
            $NPH_game = DB::table('table_communication')->orderby('communication_id')->get();
            $NPH_by_id = DB::table('table_game')->join('table_communication','table_game.communication_id','=','table_communication.communication_id')->where('table_game.communication_id',$communication_id)->get();
            
            $price_game = DB::table('table_game')->orderby('Game_price')->limit(3)->get();
            return view('pages.communication.communicationHome')->with('cate_game',$cate_game)->with('NPH_game',$NPH_game)->with('NPH_by_id',$NPH_by_id)->with('price_game',$price_game);
            
    }
}
