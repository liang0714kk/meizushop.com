<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
class ParameterController extends Controller
{
    //添加数据
     public function getAdd($name)
    {
    	$gdata = DB::table('gdetails') -> where('name', $name) -> first();
    	
    	return view('admin.parameter.add', ['title' => '规格参数添加', 'gdata' => $gdata]);
    }

    //内容插入
    public function postInsert(Request $request)
    {
    	$data = $request -> except('_token');
    	// dd($data);

    	$res = DB::table('parameter') -> insert($data);
    	//判断添加数据情况
    	if($res)
    	{
    		return redirect('/admin/parameter/index') -> with(['info' => '添加成功']);
    	}
    	else
    	{
    		return back() -> with(['info' => '添加失败']);
    	}
    }

    //首页展示
    public function getIndex(Request $request)
    {
    	$data = DB::table('parameter') 
    		-> where('name', 'like', '%'.$request -> input('keywords').'%')
    		-> paginate($request -> input('num', 5));
    	return view('admin.parameter.index', ['title' => '规格参数列表'], ['data' => $data, 'request' => $request -> all()]);
    }

    //编辑页
    public function getEdit($id)
    {
    	$data = DB::table('parameter') -> where('id',$id) -> first();


    	return view('admin.parameter.edit', ['title' => '编辑', 'data' => $data]);
    }

    //修改数据
    public function postUpdate(Request $request,$id)
    {
    	$data = $request -> except('_token');
    	$res = DB::table('parameter') -> where('id',$id) -> update($data);

    	if($res)
    	{
    		return redirect('/admin/parameter/index') -> with(['info' => '修改成功']);
    	}
    	else
    	{
    		return back() -> with(['info' => '修改失败']);
    	}
    }

   	//删除数据
   	public function getDelete($id)
   	{
   		$data = DB::table('parameter') -> where('id',$id) -> first();
   		$res = DB::table('parameter') -> where('id',$id) -> delete();
   		if($res)
    	{
    		return redirect('/admin/parameter/index') -> with(['info' => '删除成功']);
    	}
    	else
    	{
    		return back() -> with(['info' => '删除失败']);
    	}
   	}
}

