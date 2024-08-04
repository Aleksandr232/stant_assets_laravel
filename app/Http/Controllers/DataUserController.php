<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Purchase;

class DataUserController extends Controller
{
    public function index()
    {
        $users = User::where('is_admin', 0)->paginate(5);
        $purchases = Purchase::whereIn('user_id', $users->pluck('id'))->get();

        return view('admin.user.index', [
            'users' => $users,
            'purchases' => $purchases
        ]);
    }

    public function data($id)
    {
        $user = User::findOrFail($id);
        $purchases = $user->purchases()->paginate(5);

        return view('admin.user.data', [
            'user' => $user,
            'purchases' => $purchases,
        ]);
    }

    public function update_data(Request $request, $id)
    {
        $user = User::findOrFail($id);
        
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->balance = $request->input('balance');
        $user->save();



        return redirect()->back();
    }




}
