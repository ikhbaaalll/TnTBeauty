<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Brand;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::query()
            ->with('brand')
            ->get();

        return view('pages.admin.product.index', compact('products'));
    }

    public function create()
    {
        $brands = Brand::query()
            ->get();

        return view('pages.admin.product.create', compact('brands'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'description' => ['required'],
            'link' => ['required'],
            'price' => ['required', 'numeric'],
            'variation' => ['required'],
            'brand' => ['required'],
            'category' => ['required'],
        ]);

        Product::create([
            'name' => $request->name,
            'variation' => $request->variation,
            'description' => $request->description,
            'price' => $request->price,
            'brand_id' => $request->brand,
            'link' => $request->link,
            'category' => $request->category
        ]);

        return to_route('admin.products.index');
    }

    public function edit(Product $product)
    {
        $brands = Brand::query()
            ->get();

        return view('pages.admin.product.edit', compact('product', 'brands'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => ['required'],
            'description' => ['required'],
            'link' => ['required'],
            'price' => ['required', 'numeric'],
            'variation' => ['required'],
            'brand_id' => ['required'],
            'category' => ['required'],
        ]);

        $product->update($request->all());

        return to_route('admin.products.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return to_route('admin.products.index');
    }
}
