<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Brand;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::latest()->paginate(5);
        return view('brand.index', compact('brands'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('brand.create');
    }

    public function store(Request $request)
    {
        if ($request->isMethod('POST')) {

            $validator = Validator::make($request->all(), ['name' => 'required','description' => 'required']);
            
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            
            $newBrand = new Brand(); 
            $newBrand->name = $request->name;
            $newBrand->save();
            
            return redirect()->route('brand.index')->with('success', 'Brand created successfully.');
    }}

    public function show($id)
    {
        $brand = Brand::find($id);

    return view('brand.show', ['brand' => $brand]);
    }

    public function edit($id)
    {
        $brand = Brand::find($id);

        return view('brand.edit', ['brand' => $brand]);
    }

    public function update(Request $request, $id)
    {
        if ($request->isMethod('POST')) {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
            ]);
            
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();        
            }

            $brand = Brand::find($id);

            if ($brand != null) {
                $brand->name = $request->name;
                $brand->save();

                return redirect()->route('brand.index')->with('success', 'Brand updated successfully');
            }

            else
            {
                return redirect()->route('brand.index')->with('Error', 'Brand not update');
            }
        }
    }

    public function destroy($id)
    {
        $brand = Brand::find($id);
        $brand->delete();

        return redirect()->route('brand.index')->with('success', 'Brand deleted successfully');
    }
}
