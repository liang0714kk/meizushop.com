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
        // $price = DB::table('gdetail') -> where('id', 'gid') -> price;
        $price = 25;
        $data['total'] = $date['num'] * $price;


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
