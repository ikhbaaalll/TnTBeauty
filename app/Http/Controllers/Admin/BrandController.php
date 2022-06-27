<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Imports\Brand as ImportsBrand;
use App\Models\Brand;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::paginate();

        return view('pages.admin.brand.index', compact('brands'));
    }

    public function create()
    {
        return view('pages.admin.brand.create');
    }

    public function store(Request $request)
    {
        $path1 = $request->file('file')->store('temp');
        $path = storage_path('app') . '/' . $path1;

        $brands = Excel::toCollection(new ImportsBrand, $path);

        // dd($brands[0]);

        foreach ($brands[0] as $brand) {
            Brand::create([
                'name' => $brand[0]
            ]);
        }

        return to_route('admin.brands.index');
    }
}
