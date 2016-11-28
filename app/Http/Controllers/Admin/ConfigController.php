<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ConfigController extends Controller
{
    //
    public function index()
    {
    	$data = DB::table('configs') -> where('id', '1') -> first();
    	// var_dump($data);
    	// die;
    	return view('admin.config.config') -> with(['title' => '网站配置', 'data' => $data]);
    }


    public function update(Request $request)
    {
    	$data = $request -> except('_token');

    	// 处理上传头像
    		if($request -> hasFile('logo'))
    		{
				if ($request->file('logo')->isValid()){
				    //
				    $suffix = $request -> file('logo') -> getClientOriginalExtension();
				    $fileName = time().mt_rand(100000,999999) . '.' . $suffix;
				    //$tem = '1' . $suffix;

				    // 移动
				    if(!file_exists('./uploads/logo'))
				    {
				    	mkdir('./uploads/logo', true, '777');
				    }
				    $move = $request -> file('logo') -> move('./uploads/logo/', $fileName);
				   if($move)
				    {
				    	$data['logo'] = $fileName;
				    }else
				    {
				    	$data['logo'] = 'default.jpg';
				    }
				}else
				{
					$data['logo'] = 'default.jpg';
				}
    		}else
			{
				$data['logo'] = 'default.jpg';
			}

		// 执行修改
    	$res = DB::table('configs')
    		-> where('id', '1')
    		-> update($data);
    	if($res)
		{
			//配置信息
            $config = DB::table('configs') -> first();
             session(['config' => $config]);
			return redirect('/admin/index/index') -> with('info', '修改成功');
		}else
		{
			return back() -> with('info', '修改失败');
		}
    }
}
