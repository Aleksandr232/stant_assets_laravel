<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::query();

    // Apply search filter
    if ($request->has('search')) {
        $query->where('product', 'like', '%' . $request->input('search') . '%');
    }

    // Фильтрация по платформе
    if ($request->has('filter_platform')) {
        $query->where('filter_platform', $request->input('filter_platform'));
    }

    $product = $query->paginate(5);
    $category = Category::all();


        return view('site.page.index', compact('category', 'product'));
    }




}
