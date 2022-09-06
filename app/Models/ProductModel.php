<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProductModel extends Model
{
    use HasFactory;
    public function Product(){
        return DB::table('product')->get();
    }
    public function AddProduct($data){
        return DB::table('product')->insert($data);
    }
    public function getDetail($id){
        return DB::table('product')->where('product_id', $id)->first();
        
    }
    public function EditProduct($id,$data){
        return DB::table('product')->where('product_id', $id)->update($data);
    }
    public function DeleteProduct($id){
        return DB::table('product')->where('product_id', $id)->delete();
        
    }
    public function TopSellerProduct (){
        return DB::table('product')->orderBy('product_sold', 'desc')->limit(8)->get();
    }

    public function RelateProduct ($id){
        return DB::table('product')->where('category_id', $id)->inRandomOrder()->limit(4)->get();
    }
    
}
