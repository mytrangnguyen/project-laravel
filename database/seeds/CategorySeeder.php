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
            ['cate_name' => 'Tất len'],
            ['cate_name' => 'Mũ len'],
            ['cate_name' => 'Khăn len'],
            ['cate_name' => 'Túi xách'],
            ['cate_name' => 'Găng tay'],
            ['cate_name' => 'Khác']
        ]);
    }
}