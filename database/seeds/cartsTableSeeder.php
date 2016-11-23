<?php

use Illuminate\Database\Seeder;

class cartsTableSeeder extends Seeder
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
            $user['price'] = rand(100, 140);
            $user['number'] = rand(1, 5);
            $user['uid'] = rand(100, 140);
            $user['gid'] = rand(100, 140);
            $tmp[] = $user;
        }
        DB::table('carts') -> insert($tmp);
    }
}
