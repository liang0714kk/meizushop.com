<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;


use App\Http\Requests;
use App\Http\Controllers\Controller;

class CartsController extends Controller
{
    //index
    public function index(Request $request)
    {
    	$data = DB::table('carts')
                    -> leftJoin('user as u', 'u.id', '=', 'carts.uid')
                    -> leftJoin('gdetails as g', 'g.id', '=', 'carts.gid')
                    -> select('carts.*', 'g.name as goodname', 'g.price', 'g.net', 'g.rom', 'g.color', 'u.name as username')
                    -> where(function($q) use($request){
                    $q -> where('g.name', 'like', '%' . $request -> input('keywords') . '%' );
                        })
                    -> paginate($request -> input('num', 10));
        return view('admin.carts.index', ['data' => $data, 'title' => '购物车管理', 'request' => $request -> all()]);
    }

    // delete
    public function delete($id)
    {
    	$res = DB::table('carts') -> delete($id);
    	if($res)
    	{
    		return redirect('admin/carts/index') -> with(['info' => '删除成功']);
    	}else
    	{
    		return back() -> with(['title' => '购物车管理', 'info' => '删除失败']);
    	}
    }
}
