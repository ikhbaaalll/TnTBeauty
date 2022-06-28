<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Skin;
use Illuminate\Http\Request;

class SkinController extends Controller
{
    public function index(Product $product)
    {
        $skins = Skin::query()
            ->whereBelongsTo($product)
            ->get();

        return view('pages.admin.skin.index', compact('skins', 'product'));
    }

    public function create(Product $product)
    {
        return view('pages.admin.skin.create', compact('product'));
    }

    public function store(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required'
        ]);

        Skin::create(['name' => $request->name, 'product_id' => $product->id]);

        return to_route('admin.products.skins.index', [$product]);
    }

    public function edit(Product $product, Skin $skin)
    {
        return view('pages.admin.skin.edit', compact('product', 'skin'));
    }

    public function update(Request $request, Product $product, Skin $skin)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $skin->update(['name' => $request->name]);

        return to_route('admin.products.skins.index', [$product]);
    }

    public function destroy(Product $product, Skin $skin)
    {
        $skin->delete();

        return to_route('admin.products.skins.index', [$product]);
    }
}
