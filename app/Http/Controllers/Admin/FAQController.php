<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;

class FAQController extends Controller
{
    //FAQ内容添加
    public function getAdd($name)
    {
    	// $this -> validate($request,[
     //        'name' => 'required',
     //        'question' => 'required',
     //        'answer' => 'required',
            
     //       ],[
     //        'name.required' => '商品名不能为空',
     //        'question.required' => '商品说明不能为空',
     //        'answer.required' => '父分类名不能为空'
     //        ]);

    	$gdata = DB::table('gdetails') -> where('name', $name) -> first();
    	
    	return view('admin.FAQ.add', ['title' => 'FAQ添加', 'gdata' => $gdata]);
    }

    //内容插入
    public function postInsert(Request $request)
    {
    	$data = $request -> except('_token');
    	// dd($data);

    	$res = DB::table('FAQ') -> insert($data);
    	//判断添加数据情况
    	if($res)
    	{
    		return redirect('/admin/FAQ/index') -> with(['info' => '添加成功']);
    	}
    	else
    	{
    		return back() -> with(['info' => '添加失败']);
    	}
    }

    //首页展示
    public function getIndex(Request $request)
    {
    	$data = DB::table('FAQ') 
    		-> where('name', 'like', '%'.$request -> input('keywords').'%')
    		-> paginate($request -> input('num', 5));
    	return view('admin.FAQ.index', ['title' => 'FAQ列表'], ['data' => $data, 'request' => $request -> all()]);
    }

    //编辑页
    public function getEdit($id)
    {
    	$data = DB::table('FAQ') -> where('id',$id) -> first();


    	return view('admin.FAQ.edit', ['title' => '编辑', 'data' => $data]);
    }

    //修改数据
    public function postUpdate(Request $request,$id)
    {
    	$data = $request -> except('_token');
    	$res = DB::table('FAQ') -> where('id',$id) -> update($data);

    	if($res)
    	{
    		return redirect('/admin/FAQ/index') -> with(['info' => '修改成功']);
    	}
    	else
    	{
    		return back() -> with(['info' => '修改失败']);
    	}
    }

   	//删除数据
   	public function getDelete($id)
   	{
   		$data = DB::table('faq') -> where('id',$id) -> first();
   		$res = DB::table('faq') -> where('id',$id) -> delete();
   		if($res)
    	{
    		return redirect('/admin/FAQ/index') -> with(['info' => '删除成功']);
    	}
    	else
    	{
    		return back() -> with(['info' => '删除失败']);
    	}
   	}
}
