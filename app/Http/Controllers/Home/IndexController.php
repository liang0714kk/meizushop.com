<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;

use Session;

class IndexController extends Controller
{
	//首页显示
    public function index(Request $request)
    {
    	//左侧栏展示
	    $goods_data = DB::table('goods')
	    	-> where('pid', '=', 0)
	        -> get();
	    //左侧边栏商品
    	$details_data = DB::table('gdetails as c1')
    		-> leftJoin('goods as c2', 'c1.pid','=','c2.id')
	    	-> leftJoin('goods as c3', 'c3.id', '=', 'c2.pid')
	    	-> select('c1.*','c3.name as pname')
	    	-> groupby('c1.name')
	    	-> get();
	    //热品推荐显示
	    $hot_data = DB::table('gdetails')
	    	-> where('hot', 1)
	    	-> groupby('name')
	    	-> get();

		//网站配置
        $config = DB::table('configs') -> where('id', 1) -> first();
        session(['config' => $config]);
        $help = $config -> help;
        $help = explode('-', $help);
        foreach($help as $k => $v)
        {
            $name[] = explode(',', $v);
        }
        session(['name' => $name]);
        // dd(session('name'));
        $open = session('config') -> open;
        if($open == 0)
        {
            return view('home.index.repair');
        }
        return view('home.index.index',
        	['details_data' => $details_data,
        	'goods_data' => $goods_data,
        	'hot_data' => $hot_data,
			'config' => $config,
			'name' => $name,
			'request' => $request -> all()]);
	}


	//列表页展示
	public function goodsList(Request $request, $id)
	{
		$classId= $id;
		session(['classId' => $classId]);
		//分类数据
		$goodsBig = DB::table('goods') -> where('pid', 0) -> where('path', 0) -> get();
		//尚品展示带搜索
		$detailsList = DB::table('gdetails as c1')
    		-> leftJoin('goods as c2', 'c1.pid','=','c2.id')
	    	-> leftJoin('goods as c3', 'c3.id', '=', 'c2.pid')
	    	-> select('c1.*','c3.name as pname')
	    	-> where('c3.id', $id)
	    	-> groupby('c1.name')
			-> where('c1.name','like','%'.$request -> input('keywords').'%') -> paginate(8);
		//热品展示
		$hotList = DB::table('gdetails')
	    	-> where('hot', 1)
	    	-> groupby('name')
	    	-> get();
		return view('home.index.lists')
			-> with(['goodsBig' => $goodsBig,
			 'detailsList' => $detailsList,
			  'hotList' => $hotList,
			   'request' => $request -> all()]);
	}
}
