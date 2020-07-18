<?php

use Illuminate\Database\Seeder;

class SlideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('slides')->insert([
            ['img_url' => 'image/slider2.jpg'],
            ['img_url' => 'image/slider3.jpg'],
            ['img_url' => 'image/slider4.jpg'],
        ]);
    }
}
