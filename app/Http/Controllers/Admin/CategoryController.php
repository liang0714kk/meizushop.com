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
    public function index(Request $request)
    {
        //分类列表

       $data = DB::table('goods as c1')
       -> leftJoin('goods as c2', 'c1.pid','=','c2.id')
       -> select('c1.*',DB::raw("concat(c1.path,',',c1.id) as path_str"),'c2.name as pname')
       -> orderBy('path_str')
       -> where('c1.name','like','%'.$request -> input('keywords').'%')
       -> paginate($request -> input('num', 10));
      
        
        foreach($data as $k => $v)
        {
            $num = substr_count($v -> path, ',');
            $str = str_repeat('|----------', $num);
            $data[$k] -> name = $str.$v -> name;
        }
        return view('admin.category.index', ['data' => $data, 'request' => $request -> all()],['title' => '分类列表页']);
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
      //处理字段
      $this -> validate($request,[
        'pid' => 'required',
        'name' => 'required',
        ],[
        'pid.required' => '不能为空',
        'name.required' => '分类名不能为空'
        ]);
        //添加到数据库
       $data = $request -> except('_token');
      //处理时间
       $time = time();
       $data['created_at'] = $time;
       $data['updated_at'] = $time;
       if($data['pid'] == 0)
       {
            $data['path'] = 0;

        //处理banner图片
       if($request -> hasFile('banner'))
       {
          if($request -> file('banner') -> isValid())
          {
              $suffix = $request -> file('banner') -> getClientOriginalExtension();
              $fileName = time().mt_rand(10000,999999).'.'.$suffix;
              //移动文件
              if(!file_exists('./uploads/banner/'))
              {
                  mkdir('./uploads/banner', true, '777');
              }
              $move = $request -> file('banner') -> move('./uploads/banner/', $fileName);

              if($move)
              {
                  $data['banner'] = $fileName;
              }
              else
              {
                  $data['banner'] = 'default.jpg';
              }
          }
       }
       else
       {
          $data['banner'] = 'default.jpg';
       }

       //处理first图
       if($request -> hasFile('photo'))
       {
          if($request -> file('photo') ->isValid())
          {
              $suffix = $request -> file('photo') -> getClientOriginalExtension();
              $fileName = time().mt_rand(100000,999999).'.'.$suffix;
              //移动图像文件
              if(!file_exists('./uploads/first/'))
              {
                  mkdir('./uploads/first/', true, 777);
              }
              $move = $request -> file('photo') -> move('./uploads/first/', $fileName);

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

       }
       else
       {
            $parent_path = DB::table('goods') ->where('id', $request -> pid) -> first() -> path;

            $data['path'] = $parent_path.','.$request -> pid;
       }


 

      //连通数据库，执行添加
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
        
 

        //执行修改并作用数据库
        if($data['pid'] == 0)
       {
            $data['path'] = 0;

        //获取banner图
        $oldBanner = DB::table('goods') -> where('id', $id) -> first() -> banner;

        // dd ($oldBanner);
        if($request -> hasFile('banner'))
        {
            if($request -> file('banner') -> isValid())
            {
                $suffix = $request -> file('banner') -> getClientOriginalExtension();
                $fileName = time(). mt_rand(100000,999999). '.' .$suffix;

                //移动图像文件
                $move = $request -> file('banner') -> move('./uploads/banner/', $fileName);

                if($move)
                {
                    $data['banner'] = $fileName;

                    //删除原来图像
                    if(file_exists('./uploads/banner/'.$oldBanner))
                    {
                        if($oldBanner !== 'default.jpg')
                        {
                            unlink('./uploads/banner/'.$oldBanner);
                        }
                    }
                }
            }
        }

        //获取first图
        $oldPhoto = DB::table('goods') -> where('id', $id) -> first() -> banner;

        // dd ($oldBanner);
        if($request -> hasFile('photo'))
        {
            if($request -> file('photo') -> isValid())
            {
                $suffix = $request -> file('photo') -> getClientOriginalExtension();
                $fileName = time(). mt_rand(100000,999999). '.' .$suffix;

                //移动图像文件
                $move = $request -> file('photo') -> move('./uploads/first/', $fileName);

                if($move)
                {
                    $data['photo'] = $fileName;

                    //删除原来图像
                    if(file_exists('./uploads/first/'.$oldPhoto))
                    {
                        if($oldPhoto !== 'default.jpg')
                        {
                            unlink('./uploads/first/'.$oldPhoto);
                        }
                    }
                }
            }
        }
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

          dd ($res);
            //banner图像删除
            $oldBanner = $res -> banner;
            if(file_exists('./uploads/banner/'.$oldBanner))
            {
                if($oldBanner !== 'default.jpg')
                {
                    unlink('./uploads/banner/'.$oldBanner);
                }
            }

            //删除first图
            $oldPhoto = $res -> photo;
            if(file_exsts('./uploads/first/'.$oldPhoto))
            {
                if($oldPhoto !== 'default.jpg')
                {
                    unlink('./uploads/first/'.$oldPhoto);
                }
            }
        if(!$res)
        {
            $r = DB::table('goods') -> delete($id);

            //执行判断
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
