<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function store(Request $request) {
        $product = new Product;

        $product->title = $request->title;
        $product->description = $request->description;
        $product->cost = $request->cost;

        $product->save();

        return redirect('/products');
    }

    public function findById($id) {
        return view('product', [
            'product' => Product::find($id),
            'comments' => Product::find($id)->comments
        ]);
    }

    public function getProducts() {
        return view('products', ['products'=>Product::all()]);
    }

    public function deleteProduct(Request $request) {
        Product::destroy($request->id);
        
        return redirect('/products');
    }

    public function editProduct(Request $request) {
        $product = Product::find($request->id);

        if (!empty($request->title)) {
            $product->title = $request->title;
        }
        if (!empty($request->description)) {
            $product->description = $request->description;
        }
        if (!empty($request->cost)) {
            $product->cost = $request->cost;
        }
        if (!empty($request->title.$request->description.$request->cost)) {
            $product->save();
        }
        
        return back();
    }
}
