<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
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
            $user['adder'] = str_random(5);
            $user['phone'] = rand(100000, 200000);
            $user['remark'] = str_random(10);
            $user['date'] = rand(1000000000, 1400000000);
            $user['num'] = 'or' . str_random(5);
            $user['total'] = rand(50, 100);
<<<<<<< HEAD
            $user['uid'] = rand(100, 140);
            $user['gid'] = rand(100, 140);
=======
            $user['uid'] = rand(1, 100);
            $user['gid'] = rand(1, 100);
>>>>>>> 466082fae97086bf6431d037a53f0b0aa9bd3624
            $user['payid'] = rand(100, 140);
            $user['paytime'] = rand(1000000000, 1400000000);
            $user['deliverid'] = rand(100, 140);
            $user['state'] = 0;
            $user['pay'] = 0;
            $user['deliver'] = 0;
            $tmp[] = $user;
        }
        DB::table('orders') -> insert($tmp);
    }

}
