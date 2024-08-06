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


    /* public function update_purchases(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $purchases = $user->purchases;

        if ($request->has('account_id')) {
            $purchases->account_id = $request->account_id;
        }

        if ($request->has('account_password')) {
            $purchases->account_password = $request->account_password;
        }

        if ($request->has('account_email')) {
            $purchases->account_email = $request->account_email;
        }
        if ($request->has('email_password')) {
            $purchases->email_password = $request->email_password;
        }
        if ($request->has('email_link')) {
            $purchases->email_link = $request->email_link;
        }
        if ($request->has('additional')) {
            $purchases->additional = $request->additional;
        }

        if ($request->has('account_details_purchase')) {
            $purchases->account_details_purchase = $request->account_details_purchase;
        }

        if ($request->has('status_purchase')) {
            $purchases->status_purchase = $request->status_purchase;
        }

        $purchases->save();


        return redirect()->back();
    } */

    public function update_purchases(Request $request, $id)
    {
        $purchases = Purchase::findOrFail($id);


        if ($request->has('account_id')) {
            $purchases->account_id = $request->account_id;
        }

        if ($request->has('account_password')) {
            $purchases->account_password = $request->account_password;
        }

        if ($request->has('account_email')) {
            $purchases->account_email = $request->account_email;
        }
        if ($request->has('email_password')) {
            $purchases->email_password = $request->email_password;
        }
        if ($request->has('email_link')) {
            $purchases->email_link = $request->email_link;
        }
        if ($request->has('additional')) {
            $purchases->additional = $request->additional;
        }

        if ($request->has('account_details_purchase')) {
            $purchases->account_details_purchase = $request->account_details_purchase;
        }

        if ($request->has('status_purchase')) {
            $purchases->status_purchase = $request->status_purchase;
        }

        $purchases->save();


        return redirect()->back();
    }


}
