<?php

use Illuminate\Database\Seeder;

class GoodsTableSeeder extends Seeder
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
            $user['photo'] = 'default.jpg';
<<<<<<< HEAD
            $user['pid'] = rand(1,100);
=======
            $user['pid'] = rand(1, 100);
>>>>>>> 466082fae97086bf6431d037a53f0b0aa9bd3624
            $user['path'] = str_random(5);
            $user['created_at'] = rand(1000000000, 1400000000);
            $user['updated_at'] = rand(1000000000, 1400000000);
            $tmp[] = $user;
        }
        DB::table('goods') -> insert($tmp);
    }
}
