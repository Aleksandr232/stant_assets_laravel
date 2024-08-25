<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use App\Models\Blog;
use App\Models\Text;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index(Request $request)
    {

        $category = Category::all();
        $blog = Blog::all();
        $text = Text::all();
        $product = Product::all();


        return view('site.page.index', compact('category','blog', 'text', 'product'), ['scrollToFilter' => true], ['scrollToFilterMobile' => true] );
    }

    /* protected function applyFilters(Request $request, $query)
    {
        // Apply search filter
        if ($request->has('search')) {
            $query->where('product', 'like', '%' . $request->input('search') . '%');
        }

        // Apply filter_platform filter
        if ($request->has('filter_platform')) {
            $query->where('filter_platform', $request->input('filter_platform'));
        }

        if ($request->has('filter_service')) {
            $query->where('filter_service', $request->input('filter_service'));
        }

        if ($request->has('filter_price')) {
            $query->where('filter_price', $request->input('filter_price'));
        }

        if ($request->has('price')) {
            $query->where('price', $request->input('price'));
        }

        if ($request->has('category')) {
            $query->where('category', $request->input('category'));
        }

        return $query;
    } */


    public function get_product(Request $request)
    {
        $query = Product::query();

        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $query->where('product', 'like', '%' . $searchTerm . '%')
            ->where('image_platform', 'like', '%' . $searchTerm . '%');

        }

        $products = $query->get();

        return response()->json($products);
    }



}
