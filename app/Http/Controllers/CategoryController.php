<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryModel;
use App\Http\Requests\Category\AddRequest;
use App\Http\Requests\Category\EditRequest;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index (){
        $category = CategoryModel::Category();
        return view('Admin.Category.Dashboard',compact('category'));
    }
    public function CategoryAdd (){
        return view('Admin.Category.Add');
    }
    public function PostAdd (AddRequest $request){
        $data = [
            'category_name' => $request->category_name,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s')

        ];
        $a = CategoryModel::AddCategory($data);
        return redirect()->route('category')->with('msg','Thêm Category thành công');
    }
    public function CategoryEdit ($id=0){
        if(!empty($id)){
            $data = CategoryModel::getDetail($id);
            if(empty($data)){
                return redirect()->route('category.categorydashboard')->with('msg','Danh mục không tồn tại');
            }
        }else{
            return redirect()->route('category.categorydashboard')->with('msg','Liên kết không tồn tại');
        }
        

        return view('Admin.Category.Edit',compact('data'));


    }
    public function PostEdit (EditRequest $request, $id){
        $data = [
            'category_name' => $request->category_name,
            'updated_at' => date('Y-m-d H:i:s')
        ];
        CategoryModel::EditCategory($id,$data);
        return redirect()->route('category')->with('msg','Sửa Category thành công');
        
    }

    public function CategoryDelete ($id){
        CategoryModel::DeleteCategory($id);
        return redirect()->route('category')->with('msg','Xoá Category thành công');
    }
}
