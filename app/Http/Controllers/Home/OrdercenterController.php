<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use DB;
use Session;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class OrdercenterController extends Controller
{
    //index
    public function index()
    {
    	$uid = Session('master') -> id;
    	$data = DB::table('orders')
    				-> leftJoin('gdetails as g', 'g.id', '=', 'orders.gid' )
    				-> select('orders.*', 'g.name as goodname', 'g.price', 'g.color', 'g.net', 'g.rom', 'g.photo')
    				-> where('orders.uid', $uid)
    				-> paginate('10');
    	foreach($data as $k => $v)
   		{
   			$data[$k] -> date = date('Y-m-d H:i:s', $v ->date);
   		}
    	return view('home/ordercenter/index') -> with(['data' => $data, 'active' => 'index']);
    }

    //delete
    public function delete($id)
    {
    	$uid = session('master') -> id;
    	$res = DB::table('orders') -> where('uid', $uid) -> delete($id);
    	if($res)
    	{
    		return redirect('home/ordercenter/index') -> with(['info' => '删除成功']);
    	}else
    	{
    		return back() -> with(['info' => '删除成功']);
    	}
    }

    //update
    public function update($id)
    {
    	$uid = session('master') -> id;
    	$data['state'] = 1;
    	$res = DB::table('orders') -> where('id', $id) -> where('uid', $uid) -> update($data);
    	if($res)
    	{
    		return redirect('home/ordercenter/index') -> with(['info' => '收货成功']);
    	}else
    	{
    		return back() -> with(['info' => '收货失败']);
    	}
    }


    // paynow
    public function paynow($id)
    {
    	$data = DB::table('orders')
    				-> leftJoin('gdetails as g', 'g.id', '=', 'orders.gid' )
    				-> select('orders.*', 'g.name as goodname', 'g.price', 'g.color', 'g.net', 'g.rom', 'g.photo')
    				-> where('orders.id', $id)
    				-> first();
    	return view('home/order/pay') -> with(['data2' => $data]);
    }


    // nopay
    public function nopay()
    {
    	$uid = Session('master') -> id;
    	// $uid = 1;
    	$data = DB::table('orders')
    				-> leftJoin('gdetails as g', 'g.id', '=', 'orders.gid' )
    				-> select('orders.*', 'g.name as goodname', 'g.price', 'g.color', 'g.net', 'g.rom', 'g.photo')
    				-> where('orders.uid', $uid)
    				-> where('orders.pay', 0)
    				-> where('orders.deliver', 0)
    				-> where('orders.state', 0)
    				-> paginate('10');
    	foreach($data as $k => $v)
   		{
   			$data[$k] -> date = date('Y-m-d H:i:s', $v ->date);
   		}
    	return view('home/ordercenter/index') -> with(['data' => $data, 'active' => 'nopay']);
    }


     // nodeliver
    public function nodeliver()
    {
    	$uid = Session('master') -> id;
    	// $uid = 1;
    	$data = DB::table('orders')
    				-> leftJoin('gdetails as g', 'g.id', '=', 'orders.gid' )
    				-> select('orders.*', 'g.name as goodname', 'g.price', 'g.color', 'g.net', 'g.rom', 'g.photo')
    				-> where('orders.uid', $uid)
    				-> where('orders.pay', 1)
    				-> where('orders.deliver', 0)
    				-> where('orders.state', 0)
    				-> paginate('10');
    	foreach($data as $k => $v)
   		{
   			$data[$k] -> date = date('Y-m-d H:i:s', $v ->date);
   		}
    	return view('home/ordercenter/index') -> with(['data' => $data, 'active' => 'nodeliver']);
    }

     // nostate
    public function nostate()
    {
    	$uid = Session('master') -> id;
    	$data = DB::table('orders')
    				-> leftJoin('gdetails as g', 'g.id', '=', 'orders.gid' )
    				-> select('orders.*', 'g.name as goodname', 'g.price', 'g.color', 'g.net', 'g.rom', 'g.photo')
    				-> where('orders.uid', $uid)
    				-> where('orders.pay', 1)
    				-> where('orders.deliver', 1)
    				-> where('orders.state', 0)
    				-> paginate('10');
    	foreach($data as $k => $v)
   		{
   			$data[$k] -> date = date('Y-m-d H:i:s', $v ->date);
   		}
    	return view('home/ordercenter/index') -> with(['data' => $data, 'active' => 'nostate']);
    }

     // achive
    public function achive()
    {
    	$uid = Session('master') -> id;
    	$data = DB::table('orders')
    				-> leftJoin('gdetails as g', 'g.id', '=', 'orders.gid' )
    				-> select('orders.*', 'g.name as goodname', 'g.price', 'g.color', 'g.net', 'g.rom', 'g.photo')
    				-> where('orders.uid', $uid)
    				-> where('orders.pay', 1)
    				-> where('orders.deliver', 1)
    				-> where('orders.state', 1)
    				-> paginate('10');
    	foreach($data as $k => $v)
   		{
   			$data[$k] -> date = date('Y-m-d H:i:s', $v ->date);
   		}
    	return view('home/ordercenter/index') -> with(['data' => $data, 'active' => 'achive']);
    }


    //address
    public function address()
    {
    	 $uid = session('master') -> id;
    	$data = DB::table('adders') -> where('uid', $uid) -> orderBy('default', 'desc') -> get();
    	$count = DB::table('adders') -> where('uid', $uid) -> count();
    	$leftcount = 20 - $count;
    	return view('home.address.address') -> with(['data' => $data, 'count' => $count, 'leftcount' => $leftcount]);
    }

    //add
    public function add(Request $request)
    {
    	$uid = session('master') -> id;

    	$data = $request -> except('_token');
    	$data2['name'] = $data['add-name'];
    	$data2['phone'] = $data['add-phone'];
    	$data2['default'] = $data['isDefault'];
    	//拼接完全地址
    	$init = $data['s_province'] . $data['s_city'] . $data['s_county'] . $data['address'];
    	$data2['adder'] = $init;
    	// $data2['uid'] = $uid;
    	$data2['uid'] = $uid;
    	$res = DB::table('adders') -> insertGetId($data2);
    	if($res >= 1)
    	{
    		// 修改默认
	    	if($data2['default'] == 1)
	    	{
                $default['default'] = 0;
	    		$default = DB::table('adders') -> where('id', '<>', $res) -> update($default);
	    	}
    		return redirect('home/ordercenter/address');
    	}else
    	{
    		return back() -> with(['info' => '添加失败']);
    	}
    }

    //delete
    public function deleteAdder($id)
    {
    	$default = DB::table('adders') -> where('id', $id) -> first() -> default;
    	if($default == 1)
    	{
    		return back() -> with(['info' => '不能删除默认地址']);
    	}
    	$res = DB::table('adders') -> delete($id);
    	if($res)
    	{
    		return redirect('/home/ordercenter/address') -> with(['info' => '删除成功']);
    	}else
    	{
    		return back() -> with(['info' => '删除失败']);
    	}
    }

}
