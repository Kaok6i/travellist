<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function index(){
        $names = DB::select('select * from brand');
        return view ('brands',['data'=>$names]);
    }
}