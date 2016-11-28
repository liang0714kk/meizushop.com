<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Crypt;

class UserController extends Controller
{
    public function back()
    {
        return back();
        // $data = DB::table('user') -> get();
        // return view('admin.user.layout');
    }
    //添加用户
    public function add()
    {
        return view('admin.user.add',['title' => '添加用户']);
    }

    //执行添加
    public function insert(Request $request)
    {
        //处理字段
        $this -> validate($request,[
            'name' => 'required|min:6|max:18',
            'password' => 'required|min:6|max:18',
            'repassword' => 'required|same:password'
            ],[
            'name.required' => '用户名不能为空',
            'name.min' => '用户名不能少于6位',
            'name.max' => '用户名不能多于18位',
            'password.required' => '密码不能为空',
            'password.min' => '密码不能少于6位',
            'password.max' => '密码不能多于18位',
            'repassword.required' => '确认密码不能为空',
            'repassword.same' => '确认密码不一致',
            'email.required' => '邮箱不能为空',
            'email.email' => '邮箱格式不正确',
            'author.required' => '请选择权限'
            ]);

       $data = $request -> except('_token','repassword');
       // dd($data);
       //加密密码
       $data['password'] = Crypt::encrypt($data['password']);
       //哈希加密
       // $data['password'] = HASH::make($data['password']);
       //处理昵称
       $data['nickname'] = str_random(8);
       //处理状态
       $data['status'] = 1;
       //处理性别
       $data['sex'] = 1;
       //处理token字
       $data['remember_token'] = str_random(50);
       //处理时间
       $time = time();
       $data['created_at'] = $time;
       // dd($data['created_at']);
       $data['updated_at'] = $time;
       //处理头像
       if($request -> hasFile('photo'))
       {
        if($request -> file('photo') -> isValid())
        {
            $suffix = $request -> file('photo') -> getClientOriginalExtension();
            $fileName = time().mt_rand(10000,999999).'.'.$suffix;
            //移动文件
            if(!file_exists('./uploads/avater'))
            {
                mkdir('./uploads/avater', true, '777');
            }
            $move = $request -> file('photo') -> move('./uploads/avater', $fileName);

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
        $res = DB::table('user') -> insert($data);

        if($res)
        {
            return redirect('/admin/user/index') -> with(['info' => '添加成功']);
        }else
        {
            return back() -> with(['info' => '添加失败']);
        }

}

   //index
   public function index(Request $request)
   {
        $data = DB::table('user') -> where('name','like','%'.$request -> input('keywords').'%') -> paginate($request -> input('num', 10));

        return view('admin.user.index', ['data' => $data, 'request' => $request -> all()]);
   }

   // ajax 修改状态
   public function ajaxStatus(Request $request)
   {
        $id = $request -> input('id');
        //查询
        $status = DB::table('user') -> where('id', $id) -> first() -> status;
        //判断
        if($status == 1)
        {
            $res = DB::table('user') -> where('id', $id) -> update(['status' => 0]);
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
            $res = DB::table('user') -> where('id' , $id) -> update(['status' => 1]);
            if($res)
            {
                return 1;
            }else
            {
                return 2;
            }
        }
   }

   //编辑 edit

   public function edit($id)
   {
        $data = DB::table('user') -> where('id' , $id) -> first();

        return view('admin.user.edit', ['title' => '编辑用户', 'data' => $data]);
   }

   //执行编辑
   public function update(Request $request)
   {

    //处理字段
        $this -> validate($request,[
            'name' => 'required|min:6|max:18',
            'nickname' => 'required',
            'sex' => 'required',
            'email' => 'required',
            'phone' => 'required|min:11|max:11'
            ],[
            'name.required' => '用户名不能为空',
            'nickname.required' => '昵称不能为空',
            'sex.required' => '请选择性别',
            'email.required' => '邮箱不能为空',
            'author.required' => '请选择权限',
            'phone.required' => '手机号不能为空',
            'phone.min' => '请输入11位手机号',
            'phone.max' => '请输入11位手机号',
            'name.min' => '用户名不能少于6位',
            'name.max' => '用户名不能多于18位',
            'email.email' => '邮箱格式不正确'
            ]);

        $data = $request -> except('_token');
        //获取原图片
        $oldPhoto = DB::table('user') -> where('id', $request -> id) -> first() -> photo;
        if($request -> hasFile('photo'))
        {
            if($request -> file('photo') -> isValid())
            {
                $type = $request -> file('photo') -> getClientOriginalExtension();-
                $fileName = time().mt_rand(10000,9999999).'.'.$type;

                //移动文件
                $move = $request -> file('photo') -> move('./uploads/avater', $fileName);
                if($move)
                {
                    $data['photo'] = $fileName;
                    //删除旧图片
                    if($oldPhoto != 'default.jpg')
                    {
                        unlink('./uploads/avater/'.$oldPhoto);
                    }
                }
            }else
            {
                $request -> file('photo') -> move('./uploads/avater', 'default.jpg');
            }
        }
        //执行
        $res = DB::table('user') -> where('id', $request -> id) -> update($data);
        if($res)
        {  
            $res = DB::table('user') -> where('id', $request -> id) -> first();
            session(['master' => $res]);
            return redirect('admin/user/index') -> with(['info' => '修改成功']);
        }else
        {
            return back() -> with(['info' => '修改失败']);
        }

   }

   //删除
   public function delete($id)
   {
        $data = DB::table('user') -> where('id', $id) -> first();
        $res = DB::table('user') -> where('id' , $id) -> delete();
        // 获取原图片
        $oldPhoto = $data -> photo;
        if(file_exists('./uploads/avater/'.$oldPhoto))
        {
            if($oldPhoto != 'default.jpg')
            {
                unlink('./uploads/avater/'.$oldPhoto);
            }
        }
        if($res)
        {
            return redirect('admin/user/index') -> with(['info' => '删除成功']);
        }else
        {
            return back() -> with(['info' => '删除失败']);
        }
   }

   //详情
   public function details(Request $request)
   {
      //搜索分页查询
      $data = DB::table('user') -> where('name','like','%'.$request -> input('keywords').'%') -> paginate($request -> input('num', 10));
      return view('admin.user.details', ['data' => $data, 'request' => $request -> all()]);

  }
   //单个用户详情
   public function oneDetail($id)
   {
    $data = DB::table('user') -> where('id',$id) -> first();
    return view('admin.user.oneDetail', ['data' => $data]);
   }

}
