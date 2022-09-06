<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ProductModel;
use Cookie;
use stdClass;


class HomeController extends Controller
{
    
    public function index () {
        $product = ProductModel::TopSellerProduct();
        return view('layouts.home', compact('product'));
    }
    public function About () {
        return view('Client.about');
    }
    public function Course () {
        return view('Client.course');
    }
    public function Gallery () {
        return view('Client.gallery');
    }
    public function class (){
        return view('Client.class.class');
    }

    public function product ($id=0){
        if(!empty($id)){
            $data = ProductModel::getDetail($id);
            $category_id = $data->category_id;
            $relatelist = ProductModel::RelateProduct($category_id);
        }else{
            return redirect()->route('home')->with('msg','Liên kết không tồn tại');
        }
        return view('Client.product.product',compact('data','relatelist'));
    }

    public function shoppingCart($id=0,Request $request){
        $data = ProductModel::getDetail($id);
        $name = $data->product_name;
        $price = $data->product_price;
        $id = $data->product_id;
        $image = $data->product_image;
        $cart = isset($_COOKIE["cart"]) ? $_COOKIE["cart"] : "[]";

        if(isset($_COOKIE["cart"])){
            $cart = $_COOKIE["cart"];
            $cart = json_decode($cart);
            // $cart1 = json_decode(json_encode($cart), true);
            // $cartcheck = $cart1['id'];
            // dd($cart);

            $newarray = new stdClass();
            $newarray->id = $id;
            $newarray->name = $name;
            $newarray->price = $price;
            $newarray->image = $image;
            // $newarray1 = json_decode(json_encode($newarray), true);
            // $newarraycheck = $newarray->id;

            $flag = 0;

            if (is_array($cart) || is_object($cart))
            {
                foreach ($cart as $cartcheck) {
                    if ($cartcheck->id === $id) {
                        $flag = 1;
                    }
                }
            }

            if($flag==0){
                // dd($cart);
                // dd($newarray);
                array_push($cart, $newarray);
                
                setcookie("cart", json_encode($cart),time() + 100000);

            }
        }else{
            $cart = [];
            // dd($cart);
            $newarray = new stdClass(); 
            $newarray->id = $id;
            $newarray->name = $name;
            $newarray->price = $price;
            $newarray->image = $image;
            array_push($cart,$newarray);
            // $newarray1 = json_decode(json_encode($cart), true);
            // $newarraycheck = $newarray->id;

            setcookie("cart", json_encode($cart));
        }
        // return back();
        return redirect()->route('home');
    }

    public function shoppingbasket (Request $request){
        if(isset($_COOKIE['cart'])){
            $cartCookie = $_COOKIE['cart'];
            $cartCookie1 = json_decode($cartCookie);
            $total = 0;
            foreach($cartCookie1 as $item){
                $total += $item->price;
            }
            // dd($total);
        }else{
            $cartCookie = [];
            $cartCookie1 = $cartCookie;
        }
        $a = $request->input('quantity');
        return view('Client.shopping_cart.shopping_cart',compact('cartCookie1','total','a'));
    }

    public function ShopingBasketDelete ($id){
        $count = 0;
        $cartCookie = $_COOKIE['cart'];
        dd($cartCookie);
        $cartCookie = json_decode($cartCookie);
        // dd($cartCookie);
        $cartCookie1 = json_decode(json_encode($cartCookie), true);



        foreach ($cartCookie as $key)  {
            
            if ($key->id == $id) {
                // dd($count);
                // dd($cartCookie1[$count]);
                unset($cartCookie1[$count]);
                $count = 0;
            }else{
                $count += 1;

            }
            
            
        }
        $object = (array) $cartCookie1;
        // dd($object);
        $cart = [];
        foreach ($cartCookie1 as $key)  {
            array_push($cart,(object) $key);
        }
        $object = $cart;
        //  dd($cart);
        //  dd(json_encode($object));

        setcookie("cart", json_encode($object),time() + 100000,"/shoppingcart");
        // $cartCookiede = $_COOKIE['carta'];
        // dd($cartCookiede);


        // return redirect()->route('shoppingcart');
    }

    public function PostShoppingcart (){
        
        return redirect()->route('home')->with('msg','Thanh toán thành công');
    }




    
}
