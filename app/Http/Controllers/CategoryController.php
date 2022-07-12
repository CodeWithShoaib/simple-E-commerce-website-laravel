<?php

namespace App\Http\Controllers;


use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function add(Request $request){

        $request->validate([
          "title"=>"required",


        ]);


        $category=new category;
        $category->title = $request->title;

        $category->save();


    session()->put('submitsuccess', "Data save Successfully");
    return redirect()->back();
    }
    public function showcategory(){
     $category=category::all();
    //  dd($category);
     return view('category.allcategory',["categorydata"=>$category]);

    }
    // delete the list

    public function destroy($id)
    {
        $students=category::find($id);
        $students->delete();
        return redirect()->back();
    }
    public function edit($id){
        $category=category::find($id);
        return view('category.update',["categorydata"=>$category ]);

    }
    public function update(Request $request)
    {
        // $category=category::find($id);
        $category=new category;

        $category->title = $request->title;

        $category->save();
        return redirect('showcategory');

    }
    function showcategoryform(){
        return view('category.add');
    }

}
