<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class OrderController extends Controller
{
    public function order(Request $request, $id, $name){

        $order = Product::query()->find($id);

        return view('site.order.order', compact('order', 'name'));
    }
}
