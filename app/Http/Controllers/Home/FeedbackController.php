<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;

class FeedbackController extends Controller
{
    //跳填写页
    public function add()
    {
    	return view('home.feedback.add');
    }

    //单击ajax提交反馈数据
    public function ajaxFeedback(Request $request)
    {
 		//获取前台数据
 		// $data = $request -> except('_token');
        $data['uid'] = session('master') -> id;
    	$data['problem'] = $request -> input('problem');
    	// $json=json_encode($data);
    	$data['suggest'] = $request -> input('suggest');
    	$data['email'] = $request -> input('email');


    	//添加到数据库
    	$res = DB::table('feedback') -> insert($data);

    	if($res)
    	{
    		return 1;

    	}
    	else
    	{
    		return 2;
    	}

    }

    //后台展示
     public function index(Request $request)
    {
    	$data = DB::table('feedback')
    		-> where('problem', 'like', '%'.$request -> input('keywords').'%')
    		-> paginate($request -> input('num', 5));
    	return view('home.feedback.index', ['title' => '反馈建议列表'], ['data' => $data, 'request' => $request -> all()]);
    }

    //删除数据

    public function delete($id)
    {

    	$data = DB::table('feedback') -> where('id',$id) -> first();
   		$res = DB::table('feedback') -> where('id',$id) -> delete();
   		if($res)
    	{
    		return redirect('/home/feedback/index') -> with(['info' => '删除成功']);
    	}
    	else
    	{
    		return back() -> with(['info' => '删除失败']);
    	}
    }
}
