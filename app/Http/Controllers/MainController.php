<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MainController extends Controller
{
    public function load(){
        $data = DB::select('select * from SimpleView limit 6');
        return view ('index',['data'=>$data]);
    }
}
