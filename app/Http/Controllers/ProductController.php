<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\product;

class ProductController extends Controller
{
    //home page
    
    public function dash(){

        return view ('dash');
}

public function create(){

    return view ('create');
}
public function store(Request $request){

    $data=$request->validate([
        'name'=>"required",
        'email'=>"required",
        'address'=>"required",
        'gender'=>"required",
        'age'=>"required"
    ]);

    $student=product::create($data);

    return redirect(route('dash'));

}
public function edit(){
    $products=product::all();
    return view ('edit',compact('products'));
    
}

}
