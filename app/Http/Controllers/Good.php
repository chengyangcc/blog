<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class Good extends Controller
{
    public function index()
    {
    	$data = DB::table('good')->get();
    	return view('good/index',['data'=>$data]);
    }

    public function create()
    {
    	return view('good/create');
    }


    public function save(Request $request)
    {
    	
    	 $data = request()->all();
    	 unset($data['_token']);
    	 $post=DB::table('good')->insert($data);
        
        if($post){
            return redirect('good/index');
        }else{
            return redirect()->back();
        }
    }
}
