<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
class productcontroller extends Controller
{
    public function show(){
        $products= Product::all();
        return view('product.viewpage',compact('products'));
    }



    public function store(Request $request){
        $validatedata= Validator::make($request->all(),[
            'name'=>'required',
            'description'=>'required',
            'price'=>'required',
            'image'=>'required|mimes:jpg,png,jpeg,gif,svg|max:5048'
        ]);
        if($validatedata->fails()){
            return redirect()->back()->withErrors($validatedata)->withInput();
        }
$imageName = time().'.'.$request->image->extension();
$request->image->move(public_path('images'),$imageName);
$product= Product::create([
    'name'=>$request->name,
    'description'=>$request->description,
    'price'=>$request->price,
    'image'=>$imageName
]);
if($product){
    return redirect('/createpage')->with('success','Product has been added successfully');
}
else{
    return back()->with('fail','Something went wrong, try again later');
}
    }
    
    public function showeditpage($id){
        $products= Product::find($id);
 
         return view('product.editpage',compact('products'));
     }

     public function editproduct(Request $request,$id){
        $validatedData=Validator::make($request->all(),[
            'name'=>'required',
            'description'=>'required',
            'price'=>'required'
        ]);
        if($validatedData->fails()){
           return redirect()->back()->withErrors($validatedData)->withInput()->with('fail','Please fill all the fields');
       }
        
        $product= Product::find($id);
    
        $product->update([
            'name'=>$request->name,
            'description'=>$request->description,
            'price'=>$request->price
        ]);
        return redirect("/editproduct/{$request->id}")->with('success','Product updated successfully');

        
    }

    public function showdeletepage(){
        $products= Product::all();
        return view('product.deletepage',compact('products'));
    }

    public function deleteproduct($id){
        $products= Product::find($id);
        $products->delete();
        return redirect("deleteproduct")->with('success','Product deleted successfully');
    }


}
