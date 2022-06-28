<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::get();

        return view('pages.admin.brand.index', compact('brands'));
    }

    public function create()
    {
        return view('pages.admin.brand.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
        ]);

        $brand = Brand::create([
            'name' => $request->name
        ]);

        return to_route('admin.brands.index');
    }

    public function edit(Brand $brand)
    {
        return view('pages.admin.brand.edit', compact('brand'));
    }

    public function update(Request $request, Brand $brand)
    {
        $request->validate([
            'name' => ['required'],
        ]);

        $brand->update($request->all());

        return to_route('admin.brands.index');
    }

    public function destroy(Brand $brand)
    {
        $brand->delete();

        return to_route('admin.brands.index');
    }
}
