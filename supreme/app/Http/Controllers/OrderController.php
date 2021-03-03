<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Product;
use App\User;
use App\Cart;
use App\Order;
use Auth;

Use Session;

class OrderController extends Controller
{
    public function __construct(){
        $this->middleware('role:user');
        
    }
    

    public function add(){ 

        $r=request(); 
        $addOrder=Order::create([    
            
            'amount'=>$r->amount,             
            'paymentStatus'=>'pending', 
            'status'=>'',
            'phoneNo' => 0,
            'address' => '',
            'city' => '',
            'postalCode' => 0,
            'country' => '',               
            'userID'=>Auth::id(), 
        ]);

        $orderID=DB::table('orders')->where('userID','=',Auth::id())->orderBy('created_at','desc')->first(); //get the lastest order ID

        $items=$r->input('item');
        foreach($items as $item => $value){
            $carts=Cart::find($value);
            $carts->orderID = $orderID->id;
            $carts->save();
        }

        Session::flash('success',"Order succesful!");        
        // Return redirect()->route('my.order'); //redirect to payment 
        return view('shipInfo')->with('orders',$orderID);
    }

    public function show(){

        $orders=DB::table('orders')
        ->leftjoin('carts', 'orders.id', '=', 'carts.orderID')
        ->leftjoin('products', 'products.id', '=', 'carts.productID')
        ->select('carts.*','orders.*','products.*','carts.quantity as qty')
        ->where('orders.userID','=',Auth::id())
        ->where('orders.paymentStatus','=','pending')
        ->get();     
        return view('order')->with('orders',$orders);

        //select carts.*,orders.*,products.*,carts.quantity as qty from orders left join carts on orders.id = carts.orderID left join
        // products on products.id = carts.productID where orders.userID = '' and orders.paymentStatus = 'pending'
    }

    public function updateShipInfo() {
        $r=request(); 

        $order=Order::find($r->orderId);
        $order->phoneNo = $r->phoneNo;
        $order->address = $r->address;
        $order->city = $r->city;
        $order->postalCode = $r->postalCode;
        $order->country = $r->country;
        $order->save();
        Return redirect()->route('my.order'); //redirect to payment 
    }

    public function showOrderProduct() {
        $orders=DB::table('orders')

        ->leftjoin('carts', 'orders.id', '=', 'carts.orderID')
        ->leftjoin('products', 'products.id', '=', 'carts.productID')
        ->select('carts.*','orders.*','products.*','carts.quantity as qty','orders.created_at as orderDate')
        ->where('orders.userID','=',Auth::id())
        ->where('orders.status','=','Shipping')
        ->get();     
        return view('showOrder')->with('orders',$orders);

        // select carts.*, orders.*, products.*, carts.quantity as qty, orders.created_at as orderDate from orders left join carts on orders.id = 
        // carts.orderID left join products on products.id = carts.productID where orders.userID = '' and orders.status = 'Shipping'
    }
    
}
