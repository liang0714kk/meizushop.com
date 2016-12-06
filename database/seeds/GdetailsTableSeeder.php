<?php

use Illuminate\Database\Seeder;

class gdetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tmp = [];
        for($i=0; $i<99; $i++)
        {
        	$user['name'] = str_random(10);
        	$user['explain'] = str_random(10);
        	$user['color'] = str_random(10);
        	$user['photo'] = 'default.jpg';
        	$user['support'] = str_random(10);
        	$user['server'] = str_random(10);
        	$user['status'] = 0;
        	$tmp [] = $user;
            $user['price'] = rand(10, 20);
            $user['net'] =  str_random(5);
            $user['rom'] = str_random(5);
            $user['package'] = str_random(5);
            $user['area'] = str_random(5);
            $user['ticket'] = 0;
            $user['hz'] = 0;
            $user['usb'] = 0;
            $user['size'] = 0;
            $user['created_at'] = rand(1000000000, 1400000000);
            $user['updated_at'] = rand(1000000000, 1400000000);
            $user['pid'] = rand(1,100);
            $tmp[] = $user;

        }
        DB::table('gdetails') -> insert($tmp);
    }
}
