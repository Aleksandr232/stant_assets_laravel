<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductCategoryController extends Controller
{
    public function product_category(Request $request, $id, $name)
    {
        $product_category = Product::query()->where('category_id', $id)->get();
        

        return view('site.product_category.index', compact('product_category', 'name'));
    }

}
