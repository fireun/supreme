<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Category;

use Session;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:superadministrator|administrator');
    }

    public function create(){
        return view('insertCategory');
    }

    public function store(){      
        $r=request(); 
        $image=$r->file('category-image');
        $image->move('images',$image->getClientOriginalName());
        //image is the location
        $imageName=$image->getClientOriginalName();
        $addCategory=Category::create([    
            'id'=>$r->id, 
            'name'=>$r->name,       
            'image'=>$imageName,    
        ]);
        Session::flash('success','Category Create Successful');   
        Return redirect()->route('category');
    }

    public function show(){
        $categories=DB::table('categories')
        ->select('categories.*')
        ->get();

        return view('showcategory')->with('categories',$categories);
    }

    public function delete($id){
        $categories=Category::find($id);
        $categories->delete();
        return redirect()->route('all.category');
    }

    public function edit($id){
        //select * from Categories where id='$id'
        $categories = Category::all()->where('id',$id);
        return view('editCategory')->with('categories',$categories);
    }

    public function update(){
        $r=request(); //retrive submited form data
        $categories=Category::find($r->ID);  //get the record based on category ID
        if($r->file('category-image')!=''){
            $image=$r->file('category-image');
            $image->move('images',$image->getClientOriginalName());
            $imageName=$image->getClientOriginalName();
            $categories->image=$imageName;
        }

        $categories->name=$r->title;
        $categories->save();

        return redirect()->route('all.category');
    }
}
