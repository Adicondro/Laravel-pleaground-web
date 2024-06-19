<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact(['products']));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        Product::create($request->all());
        return redirect('/products');
    }

    public function edit($id)
    {
        $Product = Product::find($id);
        return view('products.edit', compact(['Product']));
    }

    public function update(Request $request, $id)
    {
        $Product = Product::find($id);
        $Product->update($request->all());
        return redirect('/products');
    }

    public function destroy($id)
    {
        $Product = Product::find($id);
        $Product->delete();
        return redirect('/products');
    }
}
