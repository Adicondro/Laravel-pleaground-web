<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductApiController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return response()->json(['message' => 'Success', 'data' => $products]);
    }

    public function show($id)
    {
        $Product = Product::find($id);
        return response()->json(['message' => 'Success', 'data' => $Product]);
    }

    public function store(Request $request)
    {
        $Product = Product::create($request->all());
        return response()->json(['message' => 'Success', 'data' => $Product]);
    }

    public function update(Request $request, $id)
    {
        $Product = Product::find($id);
        $Product->update($request->all());
        return response()->json(['message' => 'Success', 'data' => $Product]);
    }

    public function destroy($id)
    {
        $Product = Product::find($id);
        $Product->delete();
        return response()->json(['message' => 'Success', 'data' => null]);
    }
}
