<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.product.index');
    }

    public function category(Request $request)
    {
        $category = new Category([
            'name_category' => $request->name_category,
            'desc_category' => $request->desc_category,
            'file' => $request->file,
            'path' => $request->path,
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $img_path = Storage::disk('product')->putFile('categories', $file);

            $category->file = $file->getClientOriginalName();
            $category->path = $img_path;
        }

        $category->save();

        return redirect()->route('product.index');
    }

    public function product(Request $request)
    {
        $product = new Product([
            'product' => $request->product,
            'image_platform' => $request->image_platform,
            'desc_product' => $request->desc_product,
            'price' => $request->price,
            'product_img' => $request->product_img,
            'product_param' => $request->product_param,
            'info_shop' => $request->info_shop,
            'info_returns' => $request->info_returns,
            'question_product' => $request->question_product,
            'type_service' => $request->type_service,
            'param_calc' => $request->param_calc,
            'path_img_product' => $request->path_img_product,
            'category'=>$request->category,
            'category_id' => $request->category_id,
        ]);

        if ($request->hasFile('product_img')) {
            $file = $request->file('product_img');
            $path_img_product = Storage::disk('product')->putFile('products', $file);

            $product->product_img = $file->getClientOriginalName();
            $product->path_img_product = $path_img_product;
        }

        $product->save();

        return redirect()->route('product.index');
    }

}



