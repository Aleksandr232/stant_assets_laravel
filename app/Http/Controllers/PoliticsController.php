<?php

namespace App\Http\Controllers;

use App\Models\Politics;
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
        $politics = Politics::findOrFail(1); // Предполагается, что ID политики равен 1

        $politics->content_politics = $request->content_politics;
        $politics->save();

        return redirect()->route('politics.index');
    }


}
