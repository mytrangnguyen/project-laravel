<?php

use Illuminate\Database\Seeder;

class SellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sellers')->insert([
            ['fullname' => 'Nguyen Thi Hồng Thúy','address'=>'Da Nang', 'center_name'=>'Hồng Thúy','paper_identication'=>'paper',
            'email'=>'center@gmail.com','phone'=>'0134514542','user_role'=>'seller','password'=>'$2y$10$Be9TKtQ2i40DQDCztqFSZOx/E1GBP5Z9MSo3VNebzsYAXRpmUGNUa'],
            ['fullname' => 'Nguyen Thi Mơ','address'=>'Da Nang', 'center_name'=>'Mơ handmade','paper_identication'=>'paper',
            'email'=>'center1@gmail.com','phone'=>'0134514544','user_role'=>'seller','password'=>'$2y$10$Be9TKtQ2i40DQDCztqFSZOx/E1GBP5Z9MSo3VNebzsYAXRpmUGNUa'],
            ['fullname' => 'Trần Minh Trí','address'=>'Da Nang', 'center_name'=>'Hợp Trí','paper_identication'=>'paper',
            'email'=>'center2@gmail.com','phone'=>'0134514562','user_role'=>'seller','password'=>'$2y$10$Be9TKtQ2i40DQDCztqFSZOx/E1GBP5Z9MSo3VNebzsYAXRpmUGNUa'],
            ['fullname' => 'Nguyễn Thiện Chí','address'=>'Da Nang', 'center_name'=>'Mái ấm 3','paper_identication'=>'paper',
            'email'=>'center3@gmail.com','phone'=>'0134714542','user_role'=>'seller','password'=>'$2y$10$Be9TKtQ2i40DQDCztqFSZOx/E1GBP5Z9MSo3VNebzsYAXRpmUGNUa'],
            ['fullname' => 'Trần Hồng Sơn','address'=>'Da Nang', 'center_name'=>'Trung tâm Hoa Mai','paper_identication'=>'paper',
            'email'=>'center4@gmail.com','phone'=>'0164514542','user_role'=>'seller','password'=>'$2y$10$Be9TKtQ2i40DQDCztqFSZOx/E1GBP5Z9MSo3VNebzsYAXRpmUGNUa']
        ]);
    }
}
