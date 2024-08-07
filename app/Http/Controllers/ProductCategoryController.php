<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Blog;
use App\Models\Category;


class ProductCategoryController extends Controller
{
    public function product_category(Request $request, $id, $name)
    {
        $query = Product::query()->where('category_id', $id);

        /* if ($request->has('search')) {
            $query->where('product', 'like', '%' . $request->input('search') . '%');
        } */

        $product_category = $query->paginate(10);
        $blog = Blog::all();
        $category = Category::all();

        return view('site.product_category.index', compact('product_category', 'category', 'name', 'blog'), ['scrollToCategory' => true]);
    }

}
