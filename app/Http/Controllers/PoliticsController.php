<?php

namespace App\Http\Controllers;

use App\Models\Politics;
use App\Models\Category;
use App\Models\Product;
use App\Models\Text;
use Illuminate\Http\Request;

class PoliticsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.politics.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create_politics(Request $request)
    {
        $politics = Politics::firstOrNew(['id' => 1]); // Предполагается, что ID политики равен 1

        $politics->content_politics = $request->content_politics;
        $politics->save();

        return redirect()->route('politics.index');
    }

    public function politics(Request $request, $id){

        $politics = Politics::query()->find($id);

        $category = Category::all();

        $text = Text::all();

        return view('site.politics.index', compact('politics', 'category', 'text'),['scrollToPolitics' => true]);
    }


}
