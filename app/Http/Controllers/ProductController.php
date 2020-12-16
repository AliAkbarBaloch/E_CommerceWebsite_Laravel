<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    //
    function index(){
        $data= Product::all();
        return view('product',['products'=>$data]);
    }
    function Details($id){
        $data= Product::find($id);
        return view('Details',['products'=>$data]);

    }
    function DetailsForMyOrder($id){
        $data= Product::find($id);
        return view('DetailForMyOrder',['products'=>$data]);

    }
    function Search(Request $req){
        
        $data=Product::where('name','like','%'.$req->input('query').'%')->get();
        return view('Search',['products'=>$data]);
    }
    function AddToCart(Request $req){
        if($req->session()->has('user')){
            $cart=new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/login');
        }
        else{
            return redirect('/login');
        }
    }
     static function CartItem(){
         if(Session::has('user')){
            $data=Session::get('user')['id'];
        return Cart::where('user_id',$data)->count();
         }
         return redirect('/login');
    }
    function CartList(){
        if(Session::has('user')){
            $user_id=Session::get('user')['id'];
        $products=DB::table('carts')
        ->join('products','carts.product_id','=','products.id')
        ->where('carts.user_id',$user_id)
        ->select('products.*','carts.id as cart_id')
        ->get();

        return view('CartList',['products'=>$products]);
        }
        else{
            return redirect('/login');
        }
        
    }
    function CartDelete($id){
        Cart::destroy($id);
        return redirect('cartlist');
    }
    function OrderNow(){
        if(Session::has('user')){
            $user_id=Session::get('user')['id'];
        $total= $products=DB::table('carts')
        ->join('products','carts.product_id','=','products.id')
        ->where('carts.user_id',$user_id)
        ->select('products.*','carts.id as cart_id')
        ->sum('products.price');

        return view('OrderNow',['total'=>$total]);
        }
        else{
            return redirect('/login');
        }
    }
    function OrderPlace(Request $req){
        if(Session::has('user')){
            $user_id=Session::get('user')['id'];
        $allCarts=Cart::where('user_id',$user_id)->get();
        foreach($allCarts as $cart){
             $order=new Order;
             $order->product_id=$cart['product_id'];
             $order->user_id=$cart['user_id'];
             $order->status="pending";
             $order->payment_method=$req->payment_method;
             $order->payment_status="pending";
             $order->address=$req->address;
             $order->save();
             Cart::where('user_id',$user_id)->delete();
        }
        $req->input();
        return redirect('/');
        }
        else{
            return redirect('/login');
        }
        
    }
    function MyOrder(){
        if(Session::has('user')){
            $user_id=Session::get('user')['id'];
        $orders=DB::table('orders')
        ->join('products','orders.product_id','=','products.id')
        ->where('orders.user_id',$user_id)
        ->get();

        return view('MyOrder',['orders'=>$orders]); 
        }
        else{
            return redirect('/login');
        }
               
    }
    function CancelOrder($id){
        Order::destroy($id);
        return redirect('myorder');
    }
    function AddProduct(Request $req){
        if(Session::has('user')){
            $user=new Product;
            $user->name=$req->name;
            $user->price=$req->price;
            $user->category=$req->category;
            $user->description=$req->description;
            $user->gallery=$req->url;
            $user->save();
            return redirect('/');
        }
        else{
            return redirect('/login');
        }
    }
}
