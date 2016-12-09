<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use DB;
use Session;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    //index
    public function index(Request $request)
    {
        $uid = session('master') -> id;
    	$data = DB::table('gdetails') -> where('rom', $request -> rom) -> where('net', $request -> net) -> where('name',  $request -> name) -> first();
    	$total = ($request -> price) *  ($request -> number);


        $adder = DB::table('adders') -> where('uid', $uid) -> orderBy('default', 'desc') -> get();

    	return view('home.order.order') -> with(['data' => $data, 'request' => $request, 'total'  => $total, 'adder' => $adder]);
    }
    //添加地址
    public function ajax(Request $request)
    {
        $data['name'] = $request -> input('newname');
        $data['phone'] = $request -> input('newphone');
        $data['default'] = $request -> input('isDefault');
        $data['adder'] = ($request -> input('p')) . ($request -> input('c')) . ($request -> input('d')) . ($request -> input('newaddress'));
        $data['uid'] = session('master') -> id;
        $res = DB::table('adders') -> insert($data);
        if($res)
        {
            // $data['init'] = 1;
            // $json = json_encode($data);
            // return $josn;
            return 1;
        }else
        {
            $data['init'] = 0;
            $json = json_encode($data);
            return $json;
        }
   }
//添加订单
    public function add(Request $request)
    {
        $uid = session('master') -> id;
        $data = $request -> except("_token", "add-name", "add-phone", "p", "c", "d", "add-address", "isDefault");
    	$data['date'] = time();
    	$no = 'or' . date('Ymd', time()) .  rand(100000, 999999);
    	$data['no'] = $no;
        $data['uid'] = $uid;
    	$id = DB::table('orders') -> insertGetId($data);
    	if($id)
    	{
    		$data = DB::table('orders')
                    -> leftJoin('gdetails as g', 'g.id', '=', 'orders.gid' )
                    -> select('orders.*', 'g.name as goodname', 'g.price', 'g.color', 'g.net', 'g.rom', 'g.photo')
                    -> where('orders.id', $id)
                    -> first();
        return view('home/order/pay') -> with(['data2' => $data]);
    	}else
    	{
    		return back() -> with(['info' => '添加订单失败']);
    	}
    }

    public function pay(Request $request)
    {
       $id = $request -> only('id');
       $data['pay'] = 1;
       $res = DB::table('orders') -> where('id', $id) -> update($data);

       if($res)
        {
            $data = DB::table('orders')
                    -> leftJoin('gdetails as g', 'g.id', '=', 'orders.gid' )
                    -> select('orders.*', 'g.name as goodname', 'g.price', 'g.color', 'g.net', 'g.rom', 'g.photo')
                    -> where('orders.id', $id)
                    -> first();
                    // dd($data);
        return view('home/order/payed') -> with(['data2' => $data]);
        }else
        {
            return back() -> with(['info' => '支付失败']);
        }
    }
}
