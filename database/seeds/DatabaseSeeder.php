<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
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
            $user['name'] = str_random(10);
            $user['password'] = Crypt::encrypt('123');
            $user['status'] = 0;
            $user['email'] = str_random(5)."@sina.com";
            $user['photo'] = 'default.jpg';
            $time = time();
            $user['remember_token'] = str_random(50);
            $user['created_at'] = $time;
            $user['updated_at'] = $time;
            $tmp[] = $user;
        }
        DB::table('user') -> insert($tmp);
    }
}
