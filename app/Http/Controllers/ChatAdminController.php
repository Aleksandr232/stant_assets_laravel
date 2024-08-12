<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Message;

class ChatAdminController extends Controller
{
    public function index(){
        return view('admin.chat.index');
    }
}
