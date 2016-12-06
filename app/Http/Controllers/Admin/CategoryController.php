<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //分类列表

       $data = DB::table('goods as c1')
       -> leftJoin('goods as c2', 'c1.pid','=','c2.id')
       -> select('c1.*',DB::raw("concat(c1.path,',',c1.id) as path_str"),'c2.name as pname')
       -> orderBy('path_str')
       -> get();
        
        foreach($data as $k => $v)
        {
            $num = substr_count($v -> path, ',');
            $str = str_repeat('|----------', $num);
            $data[$k] -> name = $str.$v -> name;
        }

        return view('admin.category.index', ['title' => '分类列表页'],[ 'data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //添加分类

        $data = DB::table('goods') -> select('*', DB::raw("concat(path,',',id) as path_str")) -> orderBy('path_str') -> get();

        foreach($data as $k => $v)
        {
            $num = substr_count($v -> path, ',');
            $str = str_repeat('|----------', $num);
            $data[$k] -> name = $str.$v -> name;
        }

        return view('admin.category.add', ['title' => '商品分类添加'], ['data' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //添加到数据库
       $data = $request -> only('name', 'pid');
       if($data['pid'] == 0)
       {
            $data['path'] = 0;
       }
       else
       {
            $parent_path = DB::table('goods') ->where('id', $request -> pid) -> first() -> path;

            $data['path'] = $parent_path.','.$request -> pid;
       }

      //连通数据库
       $res = DB::table('goods') -> insert($data);
       if($res)
       {
            return redirect('/admin/category') -> with(['info' => '添加成功']); 
       }
       else
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
        //分类编辑

        $data = DB::table('goods') -> where('id', $id) -> first();

        $allData = DB::table('goods') -> select('*', DB::raw("concat(path,',',id) as path_str")) -> orderBy('path_str') -> get();

        return view('admin.category.edit', ['title' => '分类编辑页', 'data' => $data, 'allData' => $allData]);
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
        //处理编辑数据
        $data = $request -> except('_token', '_method');
        

        //添加到数据库
        if($data['pid'] == 0)
       {
            $data['path'] = 0;
       }
       else
       {
            $parent_path = DB::table('goods') ->where('id', $request -> pid) -> first() -> path;

            $data['path'] = $parent_path.','.$request -> pid;
       }

       //SQL编写和判断
       $res = DB::table('goods') -> where('id', $id) -> update($data);

       if($res)
       {
            return redirect('/admin/category') -> with(['info' => '编辑成功']);
       }
       else
       {
            return back() -> with(['info' => '编辑失败']);
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
        //删除分类数据
        $res = DB::table('goods') -> where('pid', $id) -> get();

        if(!$res)
        {
            $r = DB::table('goods') -> delete($id);
            if($r)
            {
                return redirect('/admin/category') -> with(['info' => "删除成功"]);
            }
            else
            {
                return back() -> with(['info' => '删除失败']);
            }

        }
        else
        {
            return back() -> with(['info' => '有子分类，请勿删除']);
        }

    }
}
