<?php

use Illuminate\Database\Seeder;

class GdetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tmp = [];
        for($i = 0; $i < 100; $i++)
        {
            $user['name'] = str_random(5);
            $user['explain'] = str_random(5);
            $user['price'] = rand(10, 20);
            $user['color'] = str_random(10);
            $user['photo'] = 'default.jpg';
            $user['net'] =  str_random(5);
            $user['rom'] = str_random(5);
            $user['package'] = str_random(5);
            $user['support'] = str_random(5);
            $user['adder'] = str_random(5);
            $user['server'] = str_random(5);
            $user['ticket'] = 0;
            $user['hz'] = 0;
            $user['usb'] = 0;
            $user['size'] = 0;
            $user['created_at'] = rand(1000000000, 1400000000);
            $user['updated_at'] = rand(1000000000, 1400000000);
            $user['gid'] = 0;
            $tmp[] = $user;
        }
        DB::table('gdetails') -> insert($tmp);
    }
}
