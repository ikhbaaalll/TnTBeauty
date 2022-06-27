<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Ingredient;
use App\Models\Product;
use App\Models\Skin;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::query()
            ->with(['brand', 'skins', 'ingredients'])
            ->paginate(10);

        return view('pages.users.product', compact('products'));
    }

    public function create()
    {
        $categories = Product::query()
            ->distinct()
            ->get(['category']);

        $brands = Brand::query()
            ->pluck('name', 'id');

        $skins = Skin::query()
            ->distinct()
            ->get(['name']);

        $functions = Ingredient::query()
            ->distinct()
            ->get(['name']);

        return view('pages.users.recommend', compact('categories', 'brands', 'skins', 'functions'));
    }

    public function store(Request $request)
    {
        $skins = Skin::query()
            ->whereIn('name', $request->skin)
            ->get();


        $ingredients = Ingredient::query()
            ->whereIn('name', $request->purpose)
            ->get();

        $products = Product::query()
            ->with(['skins', 'ingredients', 'brand'])
            ->where('category', $request->category)
            ->where('brand_id', $request->brand)
            ->whereHas('skins', function ($query) use ($skins) {
                $query->whereIn('id', $skins->pluck('id')->toArray());
            })
            ->whereHas('ingredients', function ($query) use ($ingredients) {
                $query->whereIn('id', $ingredients->pluck('id')->toArray());
            })
            ->whereBetween('price', [$request->start, $request->end])
            ->paginate(10);

        return view('pages.users.recommended', compact('products'));
    }
}
