<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;

class PhotosController extends Controller
{
    //图片添加
    public function getAdd($name)
    {
    	$gdata = DB::table('gdetails') -> where('name', $name) -> first();

    	return view('admin.photos.add', ['title' => '详情图片添加', 'gdata' => $gdata]);
    }

    //添加到数据库
    public function postInsert(Request $request)
    {
    	//执行添加
       $data = $request -> except('_token');


       //处理添加图片
       if($request -> hasFile('photo'))
       {
        if($request -> file('photo') -> isValid())
        {
            $suffix = $request -> file('photo') -> getClientOriginalExtension();
            $fileName = time().mt_rand(10000,999999).'.'.$suffix;
            //移动文件
            if(!file_exists('./uploads/hm/photos'))
            {
                mkdir("./uploads/hm/photos", true, '777');
            }
            $move = $request -> file('photo') -> move("./uploads/hm/photos/", $fileName);

            if($move)
            {
                $data['photo'] = $fileName;
            }
            else
            {
                $data['photo'] = 'default.jpg';
            }
        }
        }
        else
        {
            $data['photo'] = 'default.jpg';
        }

        // dd($data);
        $res = DB::table('photos') -> insert($data);

        if($res)
        {
            return redirect('admin/photos/index') -> with(['info' => '添加成功']);
        }else
        {
            return back() -> with(['info' => '添加失败']);
        }


    }

    //首页展示
    public function getIndex(Request $request)
    {
    	$data = DB::table('photos')
    		-> where('name', 'like', '%'.$request -> input('keywords').'%')
    		-> paginate($request -> input('num', 5));
    	return view('admin.photos.index', ['title' => '图片详情列表'], ['data' => $data, 'request' => $request -> all()]);
    }

    //编辑页
    public function getEdit($id)
    {
    	$data = DB::table('photos') -> where('id',$id) -> first();


    	return view('admin.photos.edit', ['title' => '编辑', 'data' => $data]);
    }

    //修改数据
    public function postUpdate(Request $request,$id)
    {
    	$data = $request -> except('_token');

    	 //处理添加图片
       if($request -> hasFile('photo'))
       {
        if($request -> file('photo') -> isValid())
        {
            $suffix = $request -> file('photo') -> getClientOriginalExtension();
            $fileName = time().mt_rand(10000,999999).'.'.$suffix;
            //移动文件
            if(!file_exists("./uploads/hm/photos/"))
            {
                mkdir("./uploads/hm/photos/", true, '777');
            }
            $move = $request -> file('photo') -> move("./uploads/hm/photos/", $fileName);

            if($move)
            {
                $data['photo'] = $fileName;
            }
            else
            {
                $data['photo'] = 'default.jpg';
            }
        }
        }
        else
        {
            $data['photo'] = 'default.jpg';
        }

        // dd($data);

    	$res = DB::table('photos') -> where('id',$id) -> update($data);

        if($res)
        {
            return redirect('admin/photos/index') -> with(['info' => '添加成功']);
        }else
        {
            return back() -> with(['info' => '添加失败']);
        }
    }

   	//删除数据
   	public function getDelete($id)
   	{
   		$data = DB::table('photos') -> where('id',$id) -> first();
   		$res = DB::table('photos') -> where('id',$id) -> delete();
   		if($res)
    	{
    		return redirect('/admin/photos/index') -> with(['info' => '删除成功']);
    	}
    	else
    	{
    		return back() -> with(['info' => '删除失败']);
    	}
   	}

}
