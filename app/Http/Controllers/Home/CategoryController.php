<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;

class CategoryController extends Controller
{
    //
    public function index(Request $request)
    {

    	//查询数据
    	$data = DB::table('gdetails') -> get();
    	return view('home.category.index', ['data' => $data, 'request' => $request -> all()]);
    }
}
