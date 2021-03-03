<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Category;
use App\Product;

use Session;

class productShow extends Controller
{
    public function showProduct(){
        // $products=Product::all();
        $products=DB::table('products')
        ->leftjoin('categories','categories.id','=','products.categoryID')
        ->select('categories.name as catname','categories.id as catid','products.*')
        ->get();
        return view('products')->with('products',$products);
    }

    public function productDetail($id){
        $products = Product::all()->where('id',$id);
        return view('productdetail')->with('products',$products)
                                ->with('categories',Category::all());
    }

    public function showCategory(){
        $categories=DB::table('categories')
        ->select('categories.name as catname','categories.id as catid','categories.*')
        ->paginate(3);
        return view('categories')->with('categories',$categories);
    }

    public function categoryProduct($id){
        $categories=Product::where('categoryID',$id)->get();
        $id_=$id;
        return view('categoryproduct')->with('categories',$categories);
    }

    public function search(){
        $r=request(); //retrive submitted form data
        $keyword=$r->searchProduct;
        $products=DB::table('products')
        ->select('products.*')
        ->where('products.name','like','%'. $keyword . '%')
        ->orWhere('products.description','like','%'. $keyword . '%')
        ->get();
        return view('products')->with('products',$products);
    }

    public function searchCategory(){
        $r=request(); //retrive submitted form data
        $keyword=$r->searchCategory;
        $categories=DB::table('categories')
        ->select('categories.*')
        ->where('categories.name','like','%'. $keyword . '%')
        ->get();
        return view('categories')->with('categories',$categories);
    }
}
