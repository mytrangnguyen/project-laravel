<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            // ['username' => 'Nguyen Thi Hồng Thúy','email'=>'center@gmail.com','address'=>'Da Nang',
            // 'phone'=>'0134514542','user_role'=>'seller','avatar'=>'null','password'=>'XKRRClNpuYkrad3P7IsmxzVpRe95re6gXHTCw0xMsCZJ0PU38rw28smcB813'],
            // ['username' => 'Nguyen Thi Mơ','email'=>'center1@gmail.com','address'=>'Da Nang',
            // 'phone'=>'0134514544','user_role'=>'seller','avatar'=>'null','password'=>'XKRRClNpuYkrad3P7IsmxzVpRe95re6gXHTCw0xMsCZJ0PU38rw28smcB813'],
            // ['username' => 'Trần Minh Trí','email'=>'center2@gmail.com','address'=>'Da Nang',
            // 'phone'=>'0134514562','user_role'=>'seller','avatar'=>'null','password'=>'XKRRClNpuYkrad3P7IsmxzVpRe95re6gXHTCw0xMsCZJ0PU38rw28smcB813'],
            // ['username' => 'Nguyễn Thiện Chí','email'=>'center3@gmail.com','address'=>'Da Nang',
            // 'phone'=>'0134714542','user_role'=>'seller','avatar'=>'null','password'=>'XKRRClNpuYkrad3P7IsmxzVpRe95re6gXHTCw0xMsCZJ0PU38rw28smcB813'],
            // ['username' => 'Trần Hồng Sơn','email'=>'center4@gmail.com','address'=>'Da Nang',
            // 'phone'=>'0164514542','user_role'=>'seller','avatar'=>'null','password'=>'XKRRClNpuYkrad3P7IsmxzVpRe95re6gXHTCw0xMsCZJ0PU38rw28smcB813']

        ]);
    }
}
