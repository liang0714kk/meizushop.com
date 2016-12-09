<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use DB;
use Session;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    //ajax
    public function ajax(Request $request)
    {
    	$data = DB::table('gdetails') -> where('rom', $request -> input('rom')) -> where('net', $request -> input('net')) -> where('color', $request -> input('color')) -> where('name',  $request -> input('name')) -> first();
    	$cart['gid'] = $data -> id;
      $uid = session('master') -> id;
    	$cart['uid'] = $uid;
    	$res = DB::table('carts') -> where('gid', $cart['gid']) -> where('uid', $cart['uid']) -> first();
    	if($res)
    	{
    		return 2;
    	}else
    	{
	    	$cart['number'] = $request -> input('number');
	    	$cart['name'] = $request -> input('name');
	    	$cart['price'] = $request -> input('price');
	    	$res2 = DB::table('carts') -> insert($cart);
	    	if($res2)
	    	{
	    		return 1;
	    	}else{
	    		return 0;
	    	}
    	}
   }


   //index
   public function index()
   {
   	$uid = session('master') -> id;
   	$gid = DB::table('carts') -> where('uid', $uid) -> get();
    if(!$gid)
    {
      return view('home.cart.empt');
    }
    foreach($gid as $k => $v)
    {
   		$price = DB::table('gdetails') -> where('id', $v -> gid) -> first() -> price;
   		$res['price'] = $price;
   		$res2 = DB::table('carts') -> where('gid', $v -> gid) -> update($res);
   	}
   	$data = DB::table('carts')
   				-> leftJoin('gdetails as g', 'g.id', '=', 'carts.gid' )
    			-> select('carts.*', 'g.name as goodname', 'g.price', 'g.color', 'g.net', 'g.rom', 'g.photo')
    			-> where('uid', $uid) -> get();
   	return view('home.cart.cart') -> with(['data' => $data]);
   }


   //delete
   public function delete($gid)
   {
   	  $uid = session('master') -> id;
   		$res = DB::table('carts') -> where('gid', $gid) -> where('uid', $uid) -> delete();
   		if($res)
   		{
   			return redirect('/home/cart/index');
   		}else
   		{
   			return back() -> with(['info' => '删除失败']);
   		}
   }

  //pay
   public function pay(Request $request)
    {
        $uid = session('master') -> id;
        $data2 = $request -> except('_token', 'checked');
        $data = DB::table('gdetails') -> where('id', $data2['gid']) -> first();
        $total = $data2['total'];
        $request = $data;
        $request -> number = $data2['num'];
        // dd($request);

        $adder = DB::table('adders') -> where('uid', $uid) -> orderBy('default', 'desc') -> get();

      return view('home.order.order') -> with(['data' => $data, 'request' => $request, 'total'  => $total, 'adder' => $adder]);
    }
}
