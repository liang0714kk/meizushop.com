<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Session;
use DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //index
        $data = DB::table('orders')
                    -> leftJoin('gdetails as g', 'g.id', '=', 'orders.gid')
                    -> select('orders.*', 'g.name as goodname', 'g.price', 'g.net', 'g.rom', 'g.color')
                    -> where(function($q) use($request){
                    $q -> where('g.name', 'like', '%' . $request -> input('keywords') . '%' );
                        })
                    -> paginate($request -> input('num', 10));
        // $data = DB::table('orders') -> get();
        return view('admin.order.index', ['data' => $data, 'title' => '订单管理', 'request' => $request -> all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //add
        return view('admin.order.add') -> with(['title' => '订单管理']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //insert
        //处理字段
        $this -> validate($request,[
            'gid' => 'required|integer',
            'name' => 'required',
            'num' => 'required|integer|max:3',
            'adder' => 'required',
            'phone' => 'required|digits:11',
            ],[
            'gid.required' => '商品编号不能为空',
            'gid.integer' => '商品编号需为数字',
            'name.required' => '收件人姓名不能为空',
            'num.required' => '商品数量不能为空',
            'num.integer' => '商品数量需为数字',
            'num.max' => '最多只能订购3件',
            'adder.required' => '地址不能为空',
            'phone.required' => '收件人手机号码不能为空',
            'phone.digits' => '手机号码格式不正确',
            ]);

        // 添加其余字段
        $data = $request -> except('_token');
        // $data['uid'] = Session -> pull('uid');
        $data['uid'] = 1;
        $data['no'] = date('Ymd') . rand(10000, 99999);
        $price = DB::table('gdetails') -> where('id', $request ->input('gid')) -> first() -> price;
        $data['total'] = $data['num'] * $price;

        $res = DB::table('orders') -> insert($data);
        if($res)
        {
            return redirect('/admin/order/order') -> with(['info' => '添加成功'] );
        }else
        {
            return back() -> with(['info' => '添加失败'] );
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
        //edit
        $data = DB::table('orders')
                -> where('orders.id', '=', $id)
                -> leftJoin('gdetails as g', 'g.id', '=', 'orders.gid')
                -> select('orders.*', 'g.name as goodname', 'g.price', 'g.net', 'g.rom', 'g.color')
                -> first();
        return view('admin.order.edit') -> with(['title' => '订单管理', 'data' => $data]);
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
        //update
        //处理字段
        $this -> validate($request,[
            'gid' => 'required|integer',
            'name' => 'required',
            'num' => 'required|integer|max:3|min:1',
            'adder' => 'required',
            'phone' => 'required|digits:11',
            ],[
            'gid.required' => '商品编号不能为空',
            'gid.integer' => '商品编号需为数字',
            'name.required' => '收件人姓名不能为空',
            'num.required' => '商品数量不能为空',
            'num.integer' => '商品数量需为数字',
            'num.max' => '最多只能订购3件',
            'num.min' => '数量需大于等于1',
            'adder.required' => '地址不能为空',
            'phone.required' => '收件人手机号码不能为空',
            'phone.digits' => '手机号码格式不正确',
            ]);

        // 添加其余字段
        $data = $request -> except('_token', '_method', 'id');
        $gid = DB::table('gdetails') -> where('id', $request ->input('gid')) -> first();
        if(!$gid)
        {
            return back() -> with(['info' => '商品不存在']);
        }
        // $data['uid'] = Session -> pull('uid');
        $data['uid'] = 1;
        $data['no'] = date('Ymd') . rand(10000, 99999);
        $price = DB::table('gdetails') -> where('id', $request ->input('gid')) -> first() -> price;
        $data['total'] = $data['num'] * $price;
        $res = DB::table('orders') -> where('id', $id) -> update($data);
        if($res)
        {
            return redirect('/admin/order/order') -> with(['info' => '编辑成功'] );
        }else
        {
            return back() -> with(['info' => '编辑失败'] );
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
        //delete
        $data = DB::table('orders') -> where('id', $id) -> first();
        if($data -> pay == 1)
        {
            return back() -> with(['info' => '已付款,请退款后再删除']);
        }
        $res = DB::table('orders') -> delete($id);
        if($res)
        {
            return redirect('admin/order/order') -> with(['info' => '删除成功'] );
        }else
        {
            return back() -> with(['info' => '删除失败'] );
        }
    }

}
