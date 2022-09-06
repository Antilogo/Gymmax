<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CategoryModel extends Model
{
    use HasFactory;
    public function Category(){
        return DB::table('category')->get();
    }
    public function AddCategory($data){
        return DB::table('category')->insert($data);
    }
    public function getDetail($id){
        return DB::table('category')->where('category_id', $id)->first();
        
    }
    public function EditCategory($id,$data){
        return DB::table('category')->where('category_id', $id)->update($data);
    }
    public function DeleteCategory($id){
        return DB::table('category')->where('category_id', $id)->delete();
        
    }
}
