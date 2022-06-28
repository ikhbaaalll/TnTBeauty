<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ingredient;
use App\Models\Product;
use Illuminate\Http\Request;

class IngredientsController extends Controller
{
    public function index(Product $product)
    {
        $ingredients = Ingredient::query()
            ->whereBelongsTo($product)
            ->get();

        return view('pages.admin.ingredient.index', compact('ingredients', 'product'));
    }

    public function create(Product $product)
    {
        return view('pages.admin.ingredient.create', compact('product'));
    }

    public function store(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required'
        ]);

        Ingredient::create(['name' => $request->name, 'product_id' => $product->id]);

        return to_route('admin.products.purposes.index', [$product]);
    }

    public function edit(Product $product, Ingredient $purpose)
    {
        return view('pages.admin.ingredient.edit', compact('product', 'purpose'));
    }

    public function update(Request $request, Product $product, Ingredient $purpose)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $purpose->update(['name' => $request->name]);

        return to_route('admin.products.purposes.index', [$product]);
    }

    public function destroy(Product $product, Ingredient $purpose)
    {
        $purpose->delete();

        return to_route('admin.products.purposes.index', [$product]);
    }
}
