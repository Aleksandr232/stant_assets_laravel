<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Purchase;

class DataUserController extends Controller
{
    public function index()
    {
        $users = User::where('is_admin', 0)->get();
        $purchases = Purchase::whereIn('user_id', $users->pluck('id'))->get();

        return view('admin.user.index', [
            'users' => $users,
            'purchases' => $purchases
        ]);
    }


    public function data($id)
    {
        $user = User::findOrFail($id);
        $purchases = $user->purchases()->get();

        return view('admin.user.data', [
            'user' => $user,
            'purchases' => $purchases,
        ]);
    }





}
