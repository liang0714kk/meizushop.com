<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;

class GoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //添加商品
         return view('admin.goods.add', ['title' => '商品添加']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //处理字段
        //处理字段
        $this -> validate($request,[
            
            'name.required' => '商品名不能为空',
            'explain.required' => '商品说明不能为空',
            'price.required' => '价格不能为空',
            'color.required' => '颜色不能为空',
            'support.required' => '支持类型不能为空',
            'server.required' => '售后服务商不能为空'
            ]);
        
        //执行添加
        $data = $request -> except('_token');
       //处理时间
       $time = time();
       $data['created_at'] = $time;
       //dd($data['created_at']);
       $data['updated_at'] = $time;
       //处理头像
       if($request -> hasFile('photo'))
       {
        if($request -> file('photo') -> isValid())
        {
            $suffix = $request -> file('photo') -> getClientOriginalExtension();
            $fileName = time().mt_rand(10000,999999).'.'.$suffix;
            //移动文件
            if(!file_exists('./uploads/goods'))
            {
                mkdir('./uploads/goods', true, '777');
            }
            $move = $request -> file('photo') -> move('./uploads/goods', $fileName);

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
        $res = DB::table('gdetails') -> insert($data);

        if($res)
        {
            return redirect('/admin/goods') -> with(['info' => '添加成功']);
        }else
        {
            return back() -> with(['info' => '添加失败']);
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
