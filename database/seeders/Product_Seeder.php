<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Product_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            'product_name'=>'Máy đa năng',
            'category_id'=>'2',
            'product_price'=>'10000',
            'product_des'=>'Có khả năng tập cho nhiều nhóm cơ trên cơ thể',
            'product_image'=>'https://saovietphat.vn/wp-content/uploads/2018/05/g8-1.jpg',
            'product_quantity'=>'10',
            'product_sold'=>'9',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ]);
        DB::table('product')->insert([
            'product_name'=>'Máy cho nhóm cơ vai',
            'category_id'=>'2',
            'product_price'=>'5000',
            'product_des'=>'Có khả năng tập cho nhiều nhóm cơ trên cơ thể',
            'product_image'=>'https://ampshop.vn/wp-content/uploads/2019/06/hinh-anh-may-tap-banh-nguc-1.jpg',
            'product_quantity'=>'10',
            'product_sold'=>'8',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ]);
        DB::table('product')->insert([
            'product_name'=>'Máy cho nhóm cơ chân',
            'category_id'=>'2',
            'product_price'=>'2000',
            'product_des'=>'Có khả năng tập cho nhiều nhóm cơ trên cơ thể',
            'product_image'=>'https://tigersport.vn/wp-content/uploads/2019/06/9.jpg',
            'product_quantity'=>'10',
            'product_sold'=>'7',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ]);
        DB::table('product')->insert([
            'product_name'=>'Máy cho nhóm cơ chân',
            'category_id'=>'2',
            'product_price'=>'3000',
            'product_des'=>'Có khả năng tập cho nhiều nhóm cơ trên cơ thể',
            'product_image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfK0yoL1ElC_ey7YTvdeai7MRkqvg0hi7Eiw&usqp=CAU',
            'product_quantity'=>'10',
            'product_sold'=>'6',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ]);
        DB::table('product')->insert([
            'product_name'=>'Máy cho nhóm cơ chân',
            'category_id'=>'2',
            'product_price'=>'4000',
            'product_des'=>'Có khả năng tập cho nhiều nhóm cơ trên cơ thể',
            'product_image'=>'https://tigersport.vn/wp-content/uploads/2019/06/9.jpg',
            'product_quantity'=>'10',
            'product_sold'=>'5',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ]);
        DB::table('product')->insert([
            'product_name'=>'Máy cho nhóm cơ chân',
            'category_id'=>'2',
            'product_price'=>'5000',
            'product_des'=>'Có khả năng tập cho nhiều nhóm cơ trên cơ thể',
            'product_image'=>'https://titansport.com.vn/wp-content/uploads/2017/08/gian-ta-da-nang-1.jpg',
            'product_quantity'=>'10',
            'product_sold'=>'4',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ]);
        DB::table('product')->insert([
            'product_name'=>'Máy cho nhóm cơ chân',
            'category_id'=>'2',
            'product_price'=>'6000',
            'product_des'=>'Có khả năng tập cho nhiều nhóm cơ trên cơ thể',
            'product_image'=>'https://pt-fitness.com/wp-content/uploads/2019/03/102-1-300x300.jpg',
            'product_quantity'=>'10',
            'product_sold'=>'3',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ]);
        DB::table('product')->insert([
            'product_name'=>'Máy cho nhóm cơ chân',
            'category_id'=>'2',
            'product_price'=>'6000',
            'product_des'=>'Có khả năng tập cho nhiều nhóm cơ trên cơ thể',
            'product_image'=>'https://thethaodonga.com/wp-content/uploads/2022/07/thiet-bi-phong-tap-gym-6.jpg',
            'product_quantity'=>'10',
            'product_sold'=>'2',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ]);
        DB::table('product')->insert([
            'product_name'=>'Máy cho nhóm cơ chân',
            'category_id'=>'2',
            'product_price'=>'7000',
            'product_des'=>'Có khả năng tập cho nhiều nhóm cơ trên cơ thể',
            'product_image'=>'https://thethaominhphu.com/wp-content/uploads/2022/07/gian-ta-da-nang-M-888p-360x360.jpg',
            'product_quantity'=>'10',
            'product_sold'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ]);
        DB::table('product')->insert([
            'product_name'=>'Máy cho nhóm cơ chân',
            'category_id'=>'2',
            'product_price'=>'8000',
            'product_des'=>'Có khả năng tập cho nhiều nhóm cơ trên cơ thể',
            'product_image'=>'https://www.thethaothientruong.vn/uploads/thumbs/Thiet-ke-khung-ganh-ta-K8-1.jpg',
            'product_quantity'=>'10',
            'product_sold'=>'10',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ]);

    }
}
