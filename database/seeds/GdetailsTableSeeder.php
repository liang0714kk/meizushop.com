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
        	$user['price'] = str_random(50,100);
        	$user['color'] = str_random(10);
        	$user['photo'] = 'default.jpg';
        	$user['support'] = str_random(10);
        	$user['server'] = str_random(10);
        	$user['status'] = 0;
        	$tmp [] = $user;
    
        }
        DB::table('gdetails') -> insert($tmp);
    }
}
