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
}
