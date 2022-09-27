<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->get();
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'product_image' => 'required',
            'product_description' => 'required'
        ]);
        $data = new Product();
        $data['product_name'] = $request->product_name;
        $data['description'] = $request->product_description;
        if ($request->hasFile('product_image')) {
            $image = $request->product_image;
            $ext = $image->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $image->move('admin/product', $filename);
            $data['image'] = $filename;
        }
        $data->save();
        return redirect('admin_product_create')->with('success', 'Product added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "Show";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Product::find($id);
        $data['product_name'] = $request->product_name;
        $data['description'] = $request->product_description;
        if ($request->hasFile('product_image')) {
            $path = public_path("admin/product/{$data->image}");
            if (File::exists($path)) {
                unlink($path);
            }
            $image = $request->product_image;
            $ext = $image->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $image->move('admin/product', $filename);
            $data['image'] = $filename;
        }
        $data->save();
        return redirect('admin_product')->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Product::findOrFail($id);
        $path = public_path("admin/product/{$data->image}");
        if (File::exists($path)) {
            unlink($path);
        }
        $data->delete();
        return redirect('admin_product')->with('success', 'Product Deleted successfully.');
    }
}
