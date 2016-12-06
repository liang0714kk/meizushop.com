<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;

class IndexController extends Controller
{
    public function index(Request $request)
    {
    	//左侧栏展示
    	$details_data = DB::table('gdetails as c1') 
    		-> leftJoin('goods as c2', 'c1.pid','=','c2.id') 
	    	-> leftJoin('goods as c3', 'c3.id', '=', 'c2.pid') 
	    	-> select('c1.*','c3.name as pname') 
	    	-> get();
	    $details_data_1 = DB::table('gdetails as c1') 
    		-> leftJoin('goods as c2', 'c1.pid','=','c2.id') 
	    	-> leftJoin('goods as c3', 'c3.id', '=', 'c2.pid') 
	    	-> select('c1.*','c3.name as pname') 
	    	-> groupby('c1.id')
	    	-> having('id','<=', '5')
	    	-> get();
        $details_data_2 = DB::table('gdetails as c1') 
    		-> leftJoin('goods as c2', 'c1.pid','=','c2.id') 
	    	-> leftJoin('goods as c3', 'c3.id', '=', 'c2.pid') 
	    	-> select('c1.*','c3.name as pname') 
	    	-> skip(5)
	    	-> take(5)
	    	-> get();
	    $goods_data = DB::table('goods')
	    	-> where('pid', '=', 0)
	        -> get();
    	// dd ($details_data_1);
	    //热品推荐显示
	    $hot_data = DB::table('gdetails')
	    	-> where('hot', 1)
	    	-> get();
        return view('home.index.index', ['details_data' => $details_data, 'details_data_1' => $details_data_1, 'details_data_2' => $details_data_2, 'goods_data' => $goods_data, 'hot_data' => $hot_data, 'request' => $request -> all()]);

    }
}
