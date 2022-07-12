<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;



class ProductController extends Controller
{
    // adding the product
    public function add(Request $request){

        $request->validate([
          "name"=>"required",
          "price"=>"required",
          "brand"=>"required",
          "category"=>"required",
          "description"=>"required",

        ]);

        $product=new product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->brand = $request->brand;
        $product->category = $request->category;
        $product->description = $request->description;
        $product->save();


    session()->put('submitsuccess', "Data save Successfully");
    return redirect()->back();
    }
    public function showProduct(){
     $product=product::all();
     return view('product.allproduct',["data"=>$product]);

    }
    // delete the list

    public function destroy($id)
    {
        $students=product::find($id);
        $students->delete();
        return redirect()->back();
    }
    public function edit($id){
        $students=product::find($id);
        return view('product.update',["data"=>$students ]);

    }
    public function update(Request $request)
    {
        // $product=product::find($id);
        $product=new product;

        $product->name = $request->name;
        $product->price = $request->price;
        $product->brand = $request->brand;
        $product->category = $request->category;
        $product->description = $request->description;
        $product->save();
        return redirect('showProduct');

    }
}
