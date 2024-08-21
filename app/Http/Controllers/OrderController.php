<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Text;

class OrderController extends Controller
{
    public function order(Request $request, $id, $name){

        $order = Product::query()->find($id);

        $text = Text::all();

        return view('site.order.order', compact('order', 'name', 'text'), ['scrollToProduct' => true]);
    }
}
