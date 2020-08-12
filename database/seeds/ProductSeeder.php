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
            'date_start'=>'2020-03-12','date_end'=>'2020-03-30','quantity'=>20,'description'=>'đẹp xuất sắc','cate_id'=>'1','center_id'=>'1', 'status'=>true  ],
            ['prod_name' => 'Hoa hồng giấy','url_img'=>'hoagiaytim.jpg','price_out'=>100000, 'promotion_price' =>85000,
            'date_start'=>'2020-03-12','date_end'=>'2020-03-30','quantity'=>10,'description'=>'đẹp xuất sắc','cate_id'=>'2','center_id'=>'1', 'status'=>true  ],
            ['prod_name' => 'Gấu corgi','url_img'=>'gaulen.jpg','price_out'=>30000, 'promotion_price' =>0,
            'date_start'=>'2020-01-01' ,'date_end'=>'2020-01-01','quantity'=>10,'description'=>'đẹp xuất sắc','cate_id'=>'3','center_id'=>'2', 'status'=>true ],

            ['prod_name' => 'Găng tay ngắn','url_img'=>'gang-tay01.jpg','price_out'=>40000, 'promotion_price' =>35000,
            'date_start'=>'2020-03-01' ,'date_end'=>'2020-06-01','quantity'=>10,'description'=>'Trung tâm hoa mai, đẹp xuất sắc','cate_id'=>'8','center_id'=>'2', 'status'=>true],
            ['prod_name' => 'Tất chân len cho trẻ','url_img'=>'gang-tay-dai.jpg','price_out'=>25000, 'promotion_price' =>20000,
            'date_start'=>'2020-03-22' ,'date_end'=>'2020-06-01','quantity'=>5,'description'=>'đẹp xuất sắc','cate_id'=>'4','center_id'=>'2', 'status'=>true],
            ['prod_name' => 'Mũ len cho trẻ màu xanh','url_img'=>'mu-len-xanh-tre.jpg','price_out'=>35000, 'promotion_price' =>30000,
            'date_start'=>'2020-03-22' ,'date_end'=>'2020-05-20','quantity'=>15,'description'=>'đẹp xuất sắc','cate_id'=>'5','center_id'=>'1', 'status'=>true],
            ['prod_name' => 'Mũ len cho trẻ màu trắng','url_img'=>'mu-len-xanh-tre.jpg','price_out'=>35000, 'promotion_price' =>25000,
            'date_start'=>'2020-03-22' ,'date_end'=>'2020-05-20','quantity'=>15,'description'=>'đẹp xuất sắc','cate_id'=>'5','center_id'=>'3', 'status'=>true],
            ['prod_name' => 'Túi xách mây','url_img'=>'tui-xach1.jpg','price_out'=>12000, 'promotion_price' =>10000,
            'date_start'=>'2020-04-02' ,'date_end'=>'2020-08-20','quantity'=>30,'description'=>'đẹp xuất sắc','cate_id'=>'7','center_id'=>'2', 'status'=>true],
            ['prod_name' => 'Túi xách mây 3 màu','url_img'=>'tui-xach2.jpg','price_out'=>150000, 'promotion_price' =>120000,
            'date_start'=>'2020-02-04' ,'date_end'=>'2020-08-20','quantity'=>30,'description'=>'đẹp xuất sắc mang đến sự quý phái','cate_id'=>'7','center_id'=>'4', 'status'=>true],
            ['prod_name' => 'Túi xách ví da','url_img'=>'tui-xach3.png','price_out'=>160000, 'promotion_price' =>140000,
            'date_start'=>'2020-04-21' ,'date_end'=>'2020-09-20','quantity'=>10,'description'=>'túi xách ví da handmade đẹp lạ và chất lượng','cate_id'=>'7','center_id'=>'4', 'status'=>true],
            ['prod_name' => 'Khăn len','url_img'=>'khan2.jpg','price_out'=>190000, 'promotion_price' =>150000,
            'date_start'=>'2020-02-26' ,'date_end'=>'2020-09-20','quantity'=>10,'description'=>'khăn len da handmade đẹp lạ và chất lượng tạo nên sự quý phái','cate_id'=>'6','center_id'=>'5', 'status'=>true],
            ['prod_name' => 'Tranh len','url_img'=>'tranh-len.jpg','price_out'=>190000, 'promotion_price' =>150000,
            'date_start'=>'2020-04-11' ,'date_end'=>'2020-07-26','quantity'=>10,'description'=>'tranh len handmade đẹp lạ và chất lượng','cate_id'=>'9','center_id'=>'3', 'status'=>true],
            ['prod_name' => 'Móc khóa','url_img'=>'moc-khoa-len.jpg','price_out'=>160000, 'promotion_price' =>100000,
            'date_start'=>'2020-04-11' ,'date_end'=>'2020-07-26','quantity'=>10,'description'=>'Móc khóa handmade đẹp lạ và chất lượng','cate_id'=>'9','center_id'=>'5', 'status'=>true],
            ['prod_name' => 'Túi xách ví da','url_img'=>'tui-xach3.png','price_out'=>150000, 'promotion_price' =>120000,
            'date_start'=>'2020-04-11' ,'date_end'=>'2020-07-26','quantity'=>10,'description'=>'Túi xách ví da handmade đẹp lạ và chất lượng','cate_id'=>'7','center_id'=>'5', 'status'=>true],
            ['prod_name' => 'Khăn len Tím','url_img'=>'khan-len-tim.jpg','price_out'=>110000, 'promotion_price' =>100000,
            'date_start'=>'2020-01-21' ,'date_end'=>'2020-07-26','quantity'=>10,'description'=>'Khăn len mang đến sự quý phái','cate_id'=>'6','center_id'=>'4', 'status'=>true],

            ['prod_name' => 'Hoa giấy','url_img'=>'hoagiay11.jpg','price_out'=>50000, 'promotion_price' =>0,
            'date_start'=>'2020-03-12' ,'date_end'=>'2020-03-30','quantity'=>10,'description'=>'Với chất liệu hết sức đơn giản đã tạo nên những bong hoa đẹp mê li và chất lượng','cate_id'=>'2','center_id'=>'4', 'status'=>true],
            ['prod_name' => 'Hoa giấy màu','url_img'=>'hoagiay21.jpg','price_out'=>50000, 'promotion_price' =>0,
            'date_start'=>'2020-04-11' ,'date_end'=>'2020-07-26','quantity'=>10,'description'=>'Kết những các giấy màu đơn giản nhưng lại tạo nên những sản phẩm đẹp xuất sắc','cate_id'=>'2','center_id'=>'3', 'status'=>true],
            ['prod_name' => 'Hoa giấy giấy cứng','url_img'=>'hoagiay22.jpg','price_out'=>60000, 'promotion_price' =>0,
            'date_start'=>'2020-03-22' ,'date_end'=>'2020-05-20','quantity'=>15,'description'=>'Kết hợp với các loại giấy cứng để tạo nên những sản phẩm tuyệt đẹp','cate_id'=>'2','center_id'=>'1', 'status'=>true],
            ['prod_name' => 'Hoa hồng gián tường','url_img'=>'hoagiayhong.jpg','price_out'=>60000, 'promotion_price' =>0,
            'date_start'=>'2020-03-22' ,'date_end'=>'2020-05-20','quantity'=>15,'description'=>'đẹp xuất sắc','cate_id'=>'2','center_id'=>'4', 'status'=>true],
            ['prod_name' => 'Combo mũ len siều dễ thương','url_img'=>'combomugiaylen.jpg','price_out'=>100000, 'promotion_price' =>86000,
            'date_start'=>'2020-04-02' ,'date_end'=>'2020-08-20','quantity'=>30,'description'=>'với màu tím mơ mộng tạo nên một sản phẩm chất lượng và đẹp xuất sắc','cate_id'=>'5','center_id'=>'1', 'status'=>true],
            ['prod_name' => 'Combo mũ len','url_img'=>'combomugiaylen1.jpg','price_out'=>150000, 'promotion_price' =>110000,
            'date_start'=>'2020-02-04' ,'date_end'=>'2020-08-20','quantity'=>30,'description'=>'Kết hợp với màu hồng nhẹ nhàng tạo nên sự quý phái nhưng không kém phần đáng yêu','cate_id'=>'5','center_id'=>'1', 'status'=>true],
            ['prod_name' => 'Khăn len','url_img'=>'khan2.jpg','price_out'=>150000, 'promotion_price' =>135000,
            'date_start'=>'2020-04-21' ,'date_end'=>'2020-09-20','quantity'=>10,'description'=>'khăn len được tạo nên từ những chất liệu đơn giản nhưng không kém phân đẹp lạ và chất lượng','cate_id'=>'6','center_id'=>'2', 'status'=>true],
            ['prod_name' => 'Khăn len','url_img'=>'khan22.jpg','price_out'=>190000, 'promotion_price' =>140000,
            'date_start'=>'2020-02-26' ,'date_end'=>'2020-09-20','quantity'=>10,'description'=>'Khăn lên siêu đáng yêu, đẹp mắt và chất lượng','cate_id'=>'6','center_id'=>'4', 'status'=>true],
            ['prod_name' => 'Giày len kèm gấu đáng yêu','url_img'=>'giaylentre.jpg','price_out'=>190000, 'promotion_price' =>150000,
            'date_start'=>'2020-04-11' ,'date_end'=>'2020-07-26','quantity'=>10,'description'=>'Đôi giày được làm băng len, làm cho các bé đi một cách nhẹ nhàng và làm êm đôi chân','cate_id'=>'9','center_id'=>'5', 'status'=>true],
            ['prod_name' => 'Combo giày lên','url_img'=>'giaylentre2.jpg','price_out'=>160000, 'promotion_price' =>120000,
            'date_start'=>'2020-04-11' ,'date_end'=>'2020-07-26','quantity'=>10,'description'=>'combo siêu cute, đẹp lạ và chất lượng','cate_id'=>'5','center_id'=>'1', 'status'=>true],

            ['prod_name' => 'Lắc tay','url_img'=>'lactay.jpg','price_out'=>80000, 'promotion_price' =>0,
            'date_start'=>'2020-03-01' ,'date_end'=>'2020-06-01','quantity'=>10,'description'=>'Trung tâm hoa mai, đẹp xuất sắc','cate_id'=>'9','center_id'=>'1', 'status'=>true],
            ['prod_name' => 'Lắc tay ','url_img'=>'lactay2.jpg','price_out'=>80000, 'promotion_price' =>0,
            'date_start'=>'2020-03-22' ,'date_end'=>'2020-06-01','quantity'=>5,'description'=>'Không chỉ đẹp mà còn lạ giúp cho những ai sở hữu nó trở nên tự tin hơn','cate_id'=>'9','center_id'=>'2', 'status'=>true],
            ['prod_name' => 'Lắc tay','url_img'=>'lactay5.jpg','price_out'=>80000, 'promotion_price' =>0,
            'date_start'=>'2020-03-22' ,'date_end'=>'2020-05-20','quantity'=>15,'description'=>'Không cần nhiều họa tiết cầu kỳ, lắc tay bằng nguyên liệu đơn giản nhưng vẫ rất tuyệt đẹp lạ thường','cate_id'=>'9','center_id'=>'2', 'status'=>true],
            ['prod_name' => 'Móc khóa mùa giáng sinh','url_img'=>'sp_khac2.jpg','price_out'=>80000, 'promotion_price' =>0,
            'date_start'=>'2020-03-22' ,'date_end'=>'2020-05-20','quantity'=>15,'description'=>'với thiết kế phù với một mùa giáng sinh sắp tới sản phẩm trở nên đẹp xuất sắc','cate_id'=>'9','center_id'=>'2', 'status'=>true],
            ['prod_name' => 'Đen Lồng','url_img'=>'sp-khacden.jpg','price_out'=>120000, 'promotion_price' =>86000,
            'date_start'=>'2020-04-02' ,'date_end'=>'2020-08-20','quantity'=>30,'description'=>' cùng với những họa tiết đơn giản bọc bên ngoài, cái đèn lồng này trở nên đẹp xuất sắc','cate_id'=>'9','center_id'=>'3', 'status'=>true],
            ['prod_name' => 'Đen ngủ cho bé ','url_img'=>'sp.jpg','price_out'=>150000, 'promotion_price' =>0,
            'date_start'=>'2020-02-04' ,'date_end'=>'2020-08-20','quantity'=>30,'description'=>'đẹp xuất sắc mang đến sự nhẹ nhàng cho từng giấc ngủ của bé','cate_id'=>'9','center_id'=>'3', 'status'=>true],
            ['prod_name' => 'Khăn thêu','url_img'=>'sp-khacvong.png','price_out'=>160000, 'promotion_price' =>120000,
            'date_start'=>'2020-04-21' ,'date_end'=>'2020-09-20','quantity'=>10,'description'=>'Những đường thêu uyển chuyển và khéo léo qua từng sợi chỉ tạo nên một sản phẩm đẹp và chất lượng','cate_id'=>'9','center_id'=>'5', 'status'=>true],
            ['prod_name' => 'Khăn len','url_img'=>'khan23.jpg','price_out'=>120000, 'promotion_price' =>90000,
            'date_start'=>'2020-02-26' ,'date_end'=>'2020-09-20','quantity'=>10,'description'=>'khăn len da handmade đẹp lạ và chất lượng tạo nên sự quý phái','cate_id'=>'6','center_id'=>'2', 'status'=>true],
            ['prod_name' => 'Bông lên cực đáng yêu','url_img'=>'hoalen.jpg','price_out'=>180000, 'promotion_price' =>120000,
            'date_start'=>'2020-04-11' ,'date_end'=>'2020-07-26','quantity'=>10,'description'=>'Những bông len vô cùng xinh xắn và vô cùng đẹp mắt luôn nha ','cate_id'=>'9','center_id'=>'1', 'status'=>true],
            ['prod_name' => 'Móc khóa','url_img'=>'sp_khac4.jpg','price_out'=>80000, 'promotion_price' =>0,
            'date_start'=>'2020-04-11' ,'date_end'=>'2020-07-26','quantity'=>10,'description'=>'Móc khóa handmade đẹp lạ và chất lượng','cate_id'=>'9','center_id'=>'3', 'status'=>true],


            ['prod_name' => 'vòng hoa trang trí','url_img'=>'sp-khacvong.png','price_out'=>160000, 'promotion_price' =>140000,
            'date_start'=>'2020-05-11' ,'date_end'=>'2020-08-26','quantity'=>10,'description'=>'vòng hoa kết cấu đẹp lạ','cate_id'=>'9','center_id'=>'4', 'status'=>true],
            ['prod_name' => 'Hộp bút đa năng','url_img'=>'spkhac-hopbut.jpg','price_out'=>120000, 'promotion_price' =>0,
            'date_start'=>'2020-04-11' ,'date_end'=>'2020-07-26','quantity'=>10,'description'=>'Hộp bút đa năng, đẹp, tiện lợi','cate_id'=>'9','center_id'=>'2', 'status'=>true],
            ['prod_name' => 'Hộp bút đa năng','url_img'=>'spkhac-hopbut1.jpg','price_out'=>120000, 'promotion_price' =>0,
            'date_start'=>'2020-04-11' ,'date_end'=>'2020-07-26','quantity'=>10,'description'=>'Hộp bút đa năng, đẹp, tiện lợi','cate_id'=>'9','center_id'=>'2', 'status'=>true],
            ['prod_name' => 'Hộp bút đa năng','url_img'=>'spkhac-hopbut2.jpg','price_out'=>120000, 'promotion_price' =>0,
            'date_start'=>'2020-04-11' ,'date_end'=>'2020-07-26','quantity'=>10,'description'=>'Hộp bút đa năng, đẹp, tiện lợi','cate_id'=>'9','center_id'=>'5', 'status'=>true],
            ['prod_name' => 'Hộp bút đa năng','url_img'=>'spkhac-hopbut3.jpg','price_out'=>120000, 'promotion_price' =>0,
            'date_start'=>'2020-04-11' ,'date_end'=>'2020-07-26','quantity'=>10,'description'=>'Hộp bút đa năng, đẹp, tiện lợi','cate_id'=>'9','center_id'=>'4', 'status'=>true],
            ['prod_name' => 'Sản phẩm trang trí','url_img'=>'spkhac-trangtri.jpg','price_out'=>160000, 'promotion_price' =>130000,
            'date_start'=>'2020-05-11' ,'date_end'=>'2020-07-21','quantity'=>10,'description'=>'sản phẩm dùng trang trí,đẹp xuất sắc','cate_id'=>'9','center_id'=>'2', 'status'=>true],
            ['prod_name' => 'Sản phẩm trang trí','url_img'=>'spkhac-trangtri1.jpg','price_out'=>160000, 'promotion_price' =>130000,
            'date_start'=>'2020-05-11' ,'date_end'=>'2020-07-21','quantity'=>5,'description'=>'sản phẩm dùng trang trí,đẹp xuất sắc','cate_id'=>'9','center_id'=>'1', 'status'=>true],
            ['prod_name' => 'Khung ảnh','url_img'=>'spkhac-khunganh1.jpg','price_out'=>170000, 'promotion_price' =>120000,
            'date_start'=>'2020-02-11' ,'date_end'=>'2020-07-21','quantity'=>3,'description'=>'Khung ảnh đẹp, mang lại hạnh phúc','cate_id'=>'9','center_id'=>'2', 'status'=>true],
            ['prod_name' => 'Túi xách len','url_img'=>'tui-xach4.jpg','price_out'=>170000, 'promotion_price' =>150000,
            'date_start'=>'2020-02-11' ,'date_end'=>'2020-07-21','quantity'=>3,'description'=>'Khung ảnh đẹp, mang lại hạnh phúc','cate_id'=>'9','center_id'=>'4', 'status'=>true],
            ['prod_name' => 'Chậu hoa','url_img'=>'spkhac_chauhoa.jpg','price_out'=>250000, 'promotion_price' =>200000,
            'date_start'=>'2020-03-12' ,'date_end'=>'2020-10-29','quantity'=>3,'description'=>'Chậu hoa đẹp ngây ngất','cate_id'=>'9','center_id'=>'4', 'status'=>true],
        ]);
    }
}
