<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\brand;
class BrandController extends Controller{
public function add(Request $request){

    $request->validate([
      "title"=>"required",


    ]);


    $brand=new brand;
    $brand->title = $request->title;

    $brand->save();


session()->put('submitsuccess', "Data save Successfully");
return redirect()->back();
}
public function showbrand(){
 $brand=brand::all();
//  dd($brand);
 return view('brand.allbrand',["branddata"=>$brand]);

}
// delete the list

public function destroy($id)
{
    $students=brand::find($id);
    $students->delete();
    return redirect()->back();
}
public function edit($id){
    $brand=brand::find($id);
    return view('brand.update',["branddata"=>$brand ]);

}
public function update(Request $request)
{
    // $brand=brand::find($id);
    $brand=new brand;

    $brand->title = $request->title;

    $brand->save();
    return redirect('showbrand');

}
function showbrandform(){
    return view('brand.add');
}


}
