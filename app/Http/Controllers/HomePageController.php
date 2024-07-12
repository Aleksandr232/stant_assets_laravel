<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $product = Product::paginate(5);
        $category = Category::all();

        return view('site.page.index', compact('category', 'product'));
    }
}
