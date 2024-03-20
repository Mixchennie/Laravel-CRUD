<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    //
    public function index(){
        $products = Product::all();
        return view('product/index', compact('products'));
    }
    public function create(){
        $categories = Category::all();
        return view('product/create', compact('categories'));
    }
    public function postCreate(Request $request){
        Product::create($request->all());
        return redirect('product/index');
    }
    public function update($id){
        $categories = Category::all();
        $product = Product::find($id); 
        return view('product/update', compact('categories', 'product'));
    }
    public function postUpdate(Request $request){
        $product = Product::find($request->input("id"));
        $product->update($request->all());
        return redirect('product/index');
    }
    // public function delete($id){
    //     $product = Product::find($id);
    //     $product->delete();
    //     return redirect('product/index');
    // }
    
}
