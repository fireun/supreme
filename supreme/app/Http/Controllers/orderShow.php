<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Category;
use App\Product;
use App\Cart;
use App\Order;
use Notification;
use Auth;
use Session;

class orderShow extends Controller
{

    public function __construct()
    {
        $this->middleware('role:superadministrator|administrator');
    }

    public function viewOrder(){

        $orders=DB::table('orders')
        ->select('*')
        ->where('orders.paymentStatus','=','paid')
        ->where('orders.status','!=','Shipping')
        ->get();     
        return view('viewOrder')->with('orders',$orders);

        // SELECT COUNT(carts.orderID) as CountCart, orders.* FROM 
        // `orders` LEFT JOIN carts on orders.id = carts.orderID WHERE orders.paymentStatus = 'paid' AND orders.id='14'



        // $orders=DB::table('orders')
        // ->leftjoin('carts', 'orders.id', '=', 'carts.orderID')
        // ->leftjoin('products', 'products.id', '=', 'carts.productID')
        // ->select('carts.*','orders.*','products.*','carts.quantity as qty')
        // ->where('orders.paymentStatus','=','paid')
        // ->get();     
        // return view('viewOrder')->with('orders',$orders);

        // select orders.*, carts.*, products.*,carts.quantity as qty from orders 
        // left join carts on orders.id = carts.orderID left join products on 
        // products.id = carts.productID where orders.paymentStatus = 'paid'
    }

    public function viewOrderDetail($id){

        $orders=DB::table('orders')
        ->leftjoin('carts', 'orders.id', '=', 'carts.orderID')
        ->leftjoin('products', 'products.id', '=', 'carts.productID')
        ->leftjoin('categories', 'products.categoryID', '=', 'categories.id')
        ->select('carts.*','orders.*','products.*','carts.quantity as qty','categories.name as categoryName','orders.created_at as orderDate','orders.id as orderID')
        ->where('orders.paymentStatus','=','paid')
        ->where('orders.id','=',$id)
        ->get();     

        // select orders.*, carts.*, products.*,carts.quantity as qty,categories.name as categoryName, 
        // orders.created_at as orderDate from orders left join carts on orders.id = carts.orderID left 
        // join products on products.id = carts.productID left join categories on products.categoryID = 
        // categories.id where orders.paymentStatus = 'paid' and orders.id = '1'

        $userInfo=DB::table('orders')
        ->leftjoin('users','orders.userID','=','users.id')
        ->select('users.name','users.email','orders.*')
        ->where('orders.paymentStatus','=','paid')
        ->where('orders.id','=',$id)
        ->get();
        return view('viewOrderDetail')->with('orders',$orders)->with('users',$userInfo);


        // select orders.*, users.name, users.email
        // from orders LEFT JOIN users on orders.userID = users.id where 
        // orders.paymentStatus = 'paid' and orders.id = ''



        // $orders = Order::all()->where('id',$id);
        // $userName = Order::find($id)
        // ->leftjoin('users','orders.userID','=','users.id')
        // ->select('users.name','users.email','orders.*')
        // ->get();
        // return view('viewOrderDetail')->with('orders',$orders)->with('username',$userName);
    }
    
    public function updateOrderStatus() {
        $r=request(); 

        $order=Order::find($r->orderID);
        $order->status = $r->status;
        $order->save();

        if($r->status == 'Shipping'){
            $email='wxtesting2@gmail.com';
	        Notification::route('mail', $email)->notify(new \App\Notifications\ShippingNotification($email));
        }
        Return redirect()->route('all.order'); 
    }

    // public function create(){
    //     return view('insertProduct') ->with('categories',Category::all());;
    // }

    // public function store(){    
    //     $r=request(); 
    //     $image=$r->file('product-image');
    //     $image->move('images',$image->getClientOriginalName());
    //     //image is the location
    //     $imageName=$image->getClientOriginalName();
    //     $addCategory=Product::create([    
    //         'id'=>$r->ID, 
    //         'name'=>$r->title,
    //         'description'=>$r->Description, 
    //         'price'=>$r->price,
    //         'image'=>$imageName,                 
    //         'quantity'=>$r->Quantity, 
    //         'categoryID'=>$r->category_id,             
    //     ]);   
    //     Session::flash('success','Product Create Successful');     
    //     Return redirect()->route('product');
    // }

    // public function show(){
    //     //$products=Product::all();
    //     $products=DB::table('products')
    //     ->leftjoin('categories','categories.id','=','products.categoryID')
    //     ->select('categories.name as catname','categories.id as catid','products.*')
    //     ->get();

    //     return view('showproduct')->with('products',$products);
    // }

    // public function delete($id){
    //     $products=Product::find($id);
    //     $products->delete();
    //     return redirect()->route('all.product');
    // }

    // public function edit($id){
    //     //select * from Products where id='$id'
    //     $products = Product::all()->where('id',$id);
    //     return view('editProduct')->with('products',$products)
    //                             ->with('categories',Category::all());
    // }

    // public function update(){
    //     $r=request(); //retrive submited form data
    //     $products=Product::find($r->ID);  //get the record based on product ID
    //     if($r->file('product-image')!=''){
    //         $image=$r->file('product-image');
    //         $image->move('images',$image->getClientOriginalName());
    //         $imageName=$image->getClientOriginalName();
    //         $products->image=$imageName;
    //     }

    //     $products->name=$r->title;
    //     $products->description=$r->Description;
    //     $products->price=$r->price;
    //     $products->quantity=$r->Quantity;
    //     $products->categoryID=$r->category_id;
    //     $products->save();

    //     return redirect()->route('all.product');
    // }


}
