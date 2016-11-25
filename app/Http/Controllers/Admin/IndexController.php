<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use Session;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //后台主页
    public function index()
    {
    	//最近会员
    	// $lastUpdate = Session() -> pull('updated_at');
    	$lastUpdate = 1350000000;
    	$newMemember = DB::table('user') -> where('created_at', '>=', $lastUpdate) -> count();

    	$lastMemember = DB::table('user') -> where('created_at', '>=', $lastUpdate) -> orderBy('created_at', 'desc')-> get();

    	for ($i=0; $i < count($lastMemember); $i++) { 
    		$lastMemember[$i] -> created_at = date('Y-m-d', $lastMemember[$i] -> created_at);
    	}

    	//今日销量
    	$y = date('Y');
    	$m = date('m');
    	$d = date('d');
    	// $day_start = mktime(0,0,0,$m,$d,$y);
    	$day_start = 1350000000;

    	$sailes = DB::table('orders')
    				-> where('pay', '1')
    				-> where('paytime', '>=', $day_start)
    	 			-> sum('total');

    	 //今日订单
    	 $newOrder = DB::table('orders')
    				-> where('pay', '1')
                    -> where('paytime', '>=', $day_start)
                    // -> LeftJoin('gdetails as g', 'g.id', '=', 'orders.gid')
                    // -> select('orders.*', 'g.price', 'g.net', 'g.rom', 'g.color')
    	 			-> get();
    	 // 今日新品
         $newGood = DB::table('goods') -> where('created_at', '>=', $day_start) -> orderBy('created_at', 'desc')-> get(); 

        return view('admin.index.index') -> with(['newMemember' => $newMemember, 'lastMemember' => $lastMemember, 'sailes' => $sailes, 'newOrder' => $newOrder, 'newGood' => $newGood]);
    }
}
