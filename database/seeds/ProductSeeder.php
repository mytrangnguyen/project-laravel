<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            ['prod_name' => 'Hoa tai thiên thu','url_img'=>'hoatai.jpg','price_out'=>30000, 'promotion_price' =>25000, 
            'date_start'=>'2020-03-12','date_end'=>'2020-03-30','quantity'=>20,'description'=>'đẹp xuất sắc','cate_id'=>'1','center_name'=>'Trung tâm hoa mai', 'status'=>true  ],
            ['prod_name' => 'Hoa hồng giấy','url_img'=>'hoagiaytim.jpg','price_out'=>100000, 'promotion_price' =>85000, 
            'date_start'=>'2020-03-12','date_end'=>'2020-03-30','quantity'=>10,'description'=>'đẹp xuất sắc','cate_id'=>'2','center_name'=>'Trung tâm hoa mai', 'status'=>true  ],
            ['prod_name' => 'Gấu corgi','url_img'=>'gaulen.jpg','price_out'=>30000, 'promotion_price' =>0, 
            'date_start'=>'2020-01-01' ,'date_end'=>'2020-01-01','quantity'=>10,'description'=>'đẹp xuất sắc','cate_id'=>'3','center_name'=>'Chị Hồng Thúy', 'status'=>true ],
            
        ]);
    }
}
