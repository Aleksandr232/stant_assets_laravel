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

}



