<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            ['name' => 'superadmin','email'=>'superadmin@gmail.com','password'=>'$2y$10$Be9TKtQ2i40DQDCztqFSZOx/E1GBP5Z9MSo3VNebzsYAXRpmUGNUa'],

        ]);
    }
}