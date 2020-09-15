<?php

use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activities')->insert([
            ['image' => 'image/a1.jpg'],
            ['image' => 'image/a2.jpg'],
            ['image' => 'image/a3.jpg'],
            ['image' => 'image/a4.jpg'],
            ['image' => 'image/a5.jpg'],
            ['image' => 'image/a6.jpg'],
        ]);

    }
}
