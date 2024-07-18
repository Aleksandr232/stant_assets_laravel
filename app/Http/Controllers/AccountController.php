<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AccountController extends Controller
{
    public function index(){

        $user = Auth::user();

        return view('account.page.index', compact('user'));
    }

    public function sendMessage(Request $request)
    {
        $message = $request->input('message');
        $user = Auth::user();

        broadcast(new \App\Events\MessageSent($user, $message))->toOthers();

        return response()->json(['success' => true]);
    }
}
