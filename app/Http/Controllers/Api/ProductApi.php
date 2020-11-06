<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

class ProductApi extends Controller
{
    public function index()
    {
        return Product::all();
    }

    public function show($id)
    {
        return Product::findOrFail($id);
    }

    public function save(Request $request) {
        $request->validate([
            "name" => "required",
            "price" => "required|numeric|gt:0"
        ]);
        Product::create($request->only(["name","price"]));

        // return back()->with('success','Item created successfully!');
    }
}
