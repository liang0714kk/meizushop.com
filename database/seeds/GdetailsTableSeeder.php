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
<<<<<<< HEAD
        	$user['name'] = str_random(10);
        	$user['explain'] = str_random(10);
        	$user['price'] = str_random(50,100);
        	$user['color'] = str_random(10);
        	$user['photo'] = 'default.jpg';
        	$user['support'] = str_random(10);
        	$user['server'] = str_random(10);
        	$user['status'] = 0;
        	$tmp [] = $user;
    
=======
            $user['name'] = str_random(5);
            $user['explain'] = str_random(5);
            $user['price'] = rand(10, 20);
            $user['color'] = str_random(10);
            $user['photo'] = 'default.jpg';
            $user['net'] =  str_random(5);
            $user['rom'] = str_random(5);
            $user['package'] = str_random(5);
            $user['support'] = str_random(5);
            $user['area'] = str_random(5);
            $user['server'] = str_random(5);
            $user['ticket'] = 0;
            $user['hz'] = 0;
            $user['usb'] = 0;
            $user['size'] = 0;
            $user['created_at'] = rand(1000000000, 1400000000);
            $user['updated_at'] = rand(1000000000, 1400000000);
<<<<<<< HEAD
            $user['pid'] = rand(1,100);
=======
            $user['pid'] = rand(1, 100);
>>>>>>> 466082fae97086bf6431d037a53f0b0aa9bd3624
            $tmp[] = $user;
>>>>>>> 466082fae97086bf6431d037a53f0b0aa9bd3624
        }
        DB::table('gdetails') -> insert($tmp);
    }
}
