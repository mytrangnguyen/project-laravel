<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['cate_name' => 'Hoa tai'],
            ['cate_name' => 'Hoa giấy'],
            ['cate_name' => 'Gấu len'],
            ['cate_name' => 'Khác']
        ]);
    }
}

