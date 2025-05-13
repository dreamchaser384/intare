<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
    public function create(){

        return view('create');
        
    }
    public function postp(Request $request){
       $data= $request->validate([
            'name'=>"required",
            'code'=>"required",
            'price'=>"required"
        ]);

$postp=product::create($data);
return redirect()->route('status');
    }
    

    public function status () {

        $status=product::all();
        return view('status',compact('status'));

    }
    public function edit($id){
        $data=product::findorfail($id);
        return view ('edit',compact('data'));
    }
    public function update(Request $request,$id){
        $product=product::findorfail($id);
       $data= $request->validate([
            'name'=>"required",
            'code'=>"required",
            'price'=>"required"

        ]);

        $product->update($data);
        return redirect()->route('status');



    }
    public function delete(product $products,$id){
        
        $product=product::findorfail($id);
        $product->delete($id);
        return redirect()->route('status');
    }
    public function logout(){
        return redirect(route('login'));
    }
    public function back(){
        return view ('status');
    }
}
