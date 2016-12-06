<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use DB;
use Session;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class GdetailController extends Controller
{
    //index
    public function index($pid, $name)
    {	 
    	// $pid = 12;
    	// $name = 'PRO 6s';
    	$data = DB::table('gdetails') -> where('pid', $pid) -> where('name', $name) -> groupBy('color') -> get();
        foreach($data as $k => $v)
        {
            $color[] = $v -> color;
        }
    	$data2 = DB::table('gdetails') -> where('pid', $pid) -> where('name', $name) -> groupBy('rom') -> get();
    	foreach($data2 as $key => $val)
    	{
    		$rom[] = $val -> rom;
    	}
        $data3 = DB::table('gdetails') -> where('pid', $pid) -> where('name', $name) -> groupBy('net') -> get();
        foreach($data3 as $key3 => $val3)
        {
            $net[] = $val3 -> net;
        }
        $data4 = DB::table('gdetails') -> where('pid', $pid) -> where('name', $name) -> groupBy('net') -> get();
        foreach($data4 as $key4 => $val4)
        {
            $price[] = $val4 -> price;
        }

        $photo = DB::table('gphotos') -> where('name', $name) -> get();
        // dd($photo);
    	return view('home.gdetail.gdetail') -> with(['data' => $data, 'color' => $color, 'rom' => $rom, 'net' => $net, 'price' => $price, 'photo' => $photo]);
    }
}
