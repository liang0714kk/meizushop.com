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
            $user['nickname'] = str_random(10);
            $user['password'] = Crypt::encrypt('aaaaaa');
            $user['status'] = 1;
            $user['author'] = 0;
            $user['level'] = 10;
            $user['sex'] = 1;
            $user['email'] = str_random(5)."@sina.com";
            $user['phone'] = 13728193289;
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
