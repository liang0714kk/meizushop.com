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
    public function index(Request $request)
    {
        //商品列表展示
      
       //dd ($data);

        //查询数据信息
        $data = DB::table('gdetails as c1') -> leftJoin('goods as c2', 'c1.pid','=','c2.id') -> select('c1.*','c2.name as pname') -> where('c1.name','like','%'.$request -> input('keywords').'%') -> paginate($request -> input('num', 10));
        return view('admin.goods.index', ['data' => $data, 'request' => $request -> all()], ['title' => '商品列表页']);
    }

    // ajax 修改状态
   public function ajaxStatus(Request $request)
   {
        $id = $request -> input('id');
        //查询
        $status = DB::table('gdetails') -> where('id', $id) -> first() -> status;
        //判断
        if($status == 1)
        {
            $res = DB::table('gdetails') -> where('id', $id) -> update(['status' => 0]);
            if($res)
            {
                return 0;
            }
            else
            {
                return 2;
            }
        }
        else if($status == 0)
        {
            $res = DB::table('gdetails') -> where('id' , $id) -> update(['status' => 1]);
            if($res)
            {
                return 1;
            }else
            {
                return 2;
            }
        }
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //添加商品

        $data = DB::table('goods') -> select('*', DB::raw("concat(path,',',id) as path_str")) -> orderBy('path_str') -> get();

        foreach($data as $k => $v)
        {
            $num = substr_count($v -> path, ',');
            $str = str_repeat('|----------', $num);
            $data[$k] -> name = $str.$v -> name;
        }

        return view('admin.goods.add', ['title' => '商品添加'], ['data' => $data]);
        
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

        $this -> validate($request,[
            'name' => 'required',
            'explain' => 'required',
            'pid' => 'required',
            'supplier' => 'required',
            'price' => 'required',
            'color' => 'required',
            'support' => 'required',
            'server' => 'required',
           ],[
            'name.required' => '商品名不能为空',
            'explain.required' => '商品说明不能为空',
            'pid.required' => '父分类名不能为空',
            'supplier.required' => '品牌名不能为空',
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
        //编辑商品列表
        $data = DB::table('gdetails') -> where('id', $id) -> first();
        return view('admin.goods.edit', ['data' => $data, 'title' => '编辑商品信息']);
    }

    //修改添加商品属性
    public function attr($id)
    {
        //添加商品详细属性
        $data = DB::table('gdetails') -> where('id', $id) -> first();

        return view('admin.goods.attr', ['data' => $data, 'title' => '添加商品属性']);
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
        //编辑并处理修改
        $data = $request -> except('_token','_method');
        
        //获取原来的图片
        $oldPhoto = DB::table('gdetails') -> where('id', $id) -> first() -> photo;

        if($request -> hasFile('photo'))
        {
            if($request -> file('photo') -> isValid())
            {
                $suffix = $request -> file('photo') -> getClientOriginalExtension();
                $fileName = time().mt_rand(100000,999999). '.' .$suffix;
                //移动图像文件
                $move=$request -> file('photo') -> move('./uploads/goods',$fileName); 

                if($move)
                {
                    $data['photo'] = $fileName;

                    //删除原来图像
                    if(file_exists('./uploads/goods/'.$oldPhoto))
                    {
                        if($oldPhoto !== 'default.jpg')
                        {
                          unlink('./uploads/goods/'.$oldPhoto);
                        }
                    }
                }
            }
        }

        //执行修改
        $res = DB::table('gdetails') -> where('id', $id) -> update($data);

        if($res)
        {
            return redirect('./admin/goods');
        }
        else
            {
                return back();
            }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //商品删除
        echo $id;
    //     $data = DB::table('gdetails') -> where('id', $id) -> first();
    //     $res = DB::table('gdetails') -> where('id' , $id) -> delete();
    //     // 获取原图片
    //     $oldPhoto = $data -> photo;
    //     if(file_exists('./uploads/goods/'.$oldPhoto))
    //     {
    //         if($oldPhoto != 'default.jpg')
    //         {
    //             unlink('./uploads/goods/'.$oldPhoto);
    //         }
    //     }
    //     if($res)
    //     {
    //         return redirect('./admin/goods') -> with(['info' => '删除成功']);
    //     }else
    //     {
    //         return back() -> with(['info' => '删除失败']);
    //     }
     }
}
