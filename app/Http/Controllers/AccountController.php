<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Purchase;
use App\Models\User;
use App\Models\Message;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class AccountController extends Controller
{
    public function index()
{
    $user = Auth::user();
    $purchases = $user->purchases()->paginate(5);

    $onlineUsers = User::where('is_admin', '1')->get();

    $messages = Message::where(function ($query) use ($userId, $recipientId) {
        $query->where('user_id', $userId)
              ->where('recipient_id', $recipientId);
    })->orWhere(function ($query) use ($userId, $recipientId) {
        $query->where('user_id', $recipientId)
              ->where('recipient_id', $userId);
    })
    ->orderBy('created_at', 'asc')
    ->get();


    return view('account.page.index', compact('user', 'purchases', 'onlineUsers', 'messages'), ['scrollToAccount' => true]);
}



    public function changePassword(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required',
        ]);

        if (!Hash::check($request->old_password, $user->password)) {
            return back()->withErrors(['old_password' => 'The old password is incorrect.']);
        }

        $user->password = Hash::make($request->new_password);
        $user->save();

        return redirect()->route('account')->with('success', 'Пароль успешно изменен');
    }

    public function addBalance(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'amount' => 'required',
        ]);

        $user->balance += $request->amount;
        $user->save();


        return redirect()->route('account')->with('success', 'Баланс пополнен');
    }
}
