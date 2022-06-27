<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\Brand as ImportsBrand;
use App\Models\Brand;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::query()
            ->with('brand')
            ->paginate();

        return view('pages.admin.product.index', compact('products'));
    }

    public function create()
    {
        return view('pages.admin.product.create');
    }

    public function store(Request $request)
    {
        $path1 = $request->file('file')->store('temp');
        $path = storage_path('app') . '/' . $path1;

        $products = Excel::toCollection(new ImportsBrand, $path);

        // dd($products[0]);
        $brands = Brand::query()
            ->get();

        foreach ($products[0] as $product) {
            $brand = Brand::query()
                ->firstOrCreate([
                    'name' => $product[5],

                ]);

            $prod = Product::create([
                'name' => $product[1],
                'variation' => $product[2],
                'description' => $product[3],
                'price' => $product[4],
                'brand_id' => $brand->id,
                'link' => $product[0],
                'category' => $request->category
            ]);

            $skins = explode(', ', $product[6]);

            foreach ($skins as $skin) {
                $prod->skins()->create([
                    'name' => $skin
                ]);
            }

            $ingredients = explode(', ', $product[7]);

            foreach ($ingredients as $ingredient) {
                $prod->ingredients()->create([
                    'name' => $ingredient
                ]);
            }
        }

        return to_route('admin.products.index');
    }
}
