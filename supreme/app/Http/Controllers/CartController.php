<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Product;
use App\User;
use App\Cart;
use Auth;

Use Session;

class CartController extends Controller
{
    public function __construct(){
        $this->middleware('role:user');
        
    }
    
    public function add(){ 
        $r=request(); 
        $addCategory=Cart::create([    
            
            'quantity'=>$r->quantity,             
            'orderID'=>'',
            'productID'=>$r->id,                 
            'userID'=>Auth::id(), 
                        
        ]);
        Session::flash('success',"Product add succesful!");        
        Return redirect()->route('my.cart');
    }

    public function show(){
        $carts=DB::table('carts')
        ->leftjoin('products', 'products.id', '=', 'carts.productID')
        ->select('carts.quantity as qty','carts.id as cid','products.*')
        ->where('carts.orderID','=','')
        ->where('carts.userID','=',Auth::id())
        ->get();

        // $cartTotal=DB::select('select SUM(products.price * carts.quantity) as total FROM carts LEFT JOIN products ON carts.productID = products.id');
        // $cartAmount=DB::select('select SUM(carts.quantity) as total FROM carts LEFT JOIN products ON carts.productID = products.id');
        return view('showcart')->with('carts',$carts);
                                // ->with('cartAmount',$cartAmount)
                                // ->with('cartTotal',$cartTotal);
    }

    public function editCart($id)
    {
        $cart = Cart::all()->where('id',$id);
        return view('editcart')->with('carts',$cart)
                                ->with('products',Product::all());
    }

    public function updateCart()
    {
        $r=request(); 
        $carts=Cart::find($r->id);
        $carts->quantity=$r->quantity;
        // $id=$r->id;
        $carts->id=$r->id;
        $carts->save();
        return redirect()->route('my.cart');
    }

    public function removeCart($id){
        $cart=Cart::find($id);
        $cart->delete();
        return redirect()->route('my.cart');
    }
}
