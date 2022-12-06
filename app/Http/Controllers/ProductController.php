<?php

namespace App\Http\Controllers;


use App\Models\Product;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{

    public function addProduct(Request $req)
    {
        Product::create([
            'name' => $req->name,
            'description' => $req->desc,
            'price' => $req->price,
        ]);

        return redirect()->route('product');
    }
    public function edit($id)
    {
        $product =  Product::find($id);
        return view('update', ['product' => $product]);
    }
    public function delete($id)
    {
        $product =  Product::find($id);
        $product->delete();

        return $this->productPage();
    }

    public function update(Request $req)
    {
        $product =  Product::find($req->id);

        $product->update([
            'name' => $req->name,
            'description' => $req->desc,
            'price' => $req->price,
        ]);
        return $this->productPage();
    }


    public function productPage()
    {
        $product =  Product::get();
        return view('productPage', ['data' => $product]);
    }
}
