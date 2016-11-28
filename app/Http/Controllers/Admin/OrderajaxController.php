<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class OrderajaxController extends Controller
{
    //ajax
    // 改变发货状态
    public function deliver(Request $request)
    {
        //ajax
        $id = $request -> input('id');
        $pay = DB::table('orders') -> where('id', $id) -> first() -> pay;
     	
        $deliver = DB::table('orders') -> where('id', $id) -> first() -> deliver;
        if($deliver == 1)
        {
        	$res = DB::table('orders') -> where('id', $id) -> update(['deliver' => 0]);
    		if($res)
    		{
    			return 0;
    		}else
    		{
    			return 2;
    		}
    	}else
    	{	
    		if($pay == 0)
    		{
     			return 7;
    		}else
    		{
    			$res = DB::table('orders') -> where('id', $id) -> update(['deliver' => 1]);
    			if($res)
    			{
    				return 1;
    			}else
    			{
    				return 4;
    			}
    		}
	    }
    }


    // 改变支付状态
    public function pay(Request $request)
    {
        //ajax
        $id = $request -> input('id');
        $pay = DB::table('orders') -> where('id', $id) -> first() -> pay;
        if($pay == 1)
        {
        	$res = DB::table('orders') -> where('id', $id) -> update(['pay' => 0]);
    		if($res)
    		{
    			return 0;
    		}else
    		{
    			return 2;
    		}
    	}else
    	{
    		$res = DB::table('orders') -> where('id', $id) -> update(['pay' => 1]);
    		if($res)
    		{
    			return 1;
    		}else
    		{
    			return 4;
    		}
    	}
    }
}
