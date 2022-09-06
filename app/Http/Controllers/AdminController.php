<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;
use App\Http\Requests\Product\AddRequest;
use App\Http\Requests\Product\EditRequest;

class AdminController extends Controller
{
    //
    public function index (){
        return view('Admin.index');
    }
    public function ProductDashboard (){
        $product = ProductModel::Product();
        return view('Admin.Product.ProductDashboard',compact('product'));
    }

    //Product
    public function ProductAdd (){
        return view('Admin.Product.Add');
    }
    public function PostAdd (AddRequest $request){
        $data = [
            'product_name' => $request->product_name,
            'product_price' => $request->product_price,
            'product_des' => $request->product_des,
            'product_image' => $request->product_img,
            'product_quantity' => $request->product_quantity,
            'created_at' => date('Y-m-d H:i:s')
        ];
        ProductModel::AddProduct($data);
        return redirect()->route('product.dashboard')->with('msg','Thêm Product thành công');
    }

    public function ProductEdit ($id=0){
        if(!empty($id)){
            $data = ProductModel::getDetail($id);
            if(empty($data)){
                return redirect()->route('product.dashboard')->with('msg','Người dùng không tồn tại');
            }
        }else{
            return redirect()->route('product.dashboard')->with('msg','Liên kết không tồn tại');
        }
        

        return view('Admin.Product.Edit',compact('data'));


    }
    public function PostEdit (EditRequest $request, $id){
        $data = [
            'product_name' => $request->product_name,
            'product_price' => $request->product_price,
            'product_des' => $request->product_des,
            'product_image' => $request->product_img,
            'product_quantity' => $request->product_quantity,
            'updated_at' => date('Y-m-d H:i:s')
        ];
        ProductModel::EditProduct($id,$data);
        return redirect()->route('product.dashboard')->with('msg','Sửa Product thành công');
        
    }

    public function ProductDelete ($id){
        ProductModel::DeleteProduct($id);
        return redirect()->route('product.dashboard')->with('msg','Xoá Product thành công');
    }



}
