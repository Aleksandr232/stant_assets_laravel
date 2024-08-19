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
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class AccountController extends Controller
{
    public function index()
{
    $user = Auth::user();
    $purchases = $user->purchases()->paginate(5);

    $onlineUsers = User::where('is_admin', '1')->get();




    return view('account.page.index', compact('user', 'purchases', 'onlineUsers'), ['scrollToAccount' => true]);
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

    public function addAvatar(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'avatar' => 'required',
        ]);

        if ($request->hasFile('avatar')) {
            // Удаляем старый аватар, если он существует
            if ($user->avatar) {
                Storage::delete($user->avatar);
            }

            $avatar = $request->file('avatar');
            $avatarName = time() . '.' . $avatar->getClientOriginalExtension();
            $avatarPath = 'img/' . $avatarName;

            // Сохраняем аватар в системе хранения
            Storage::disk('avatars')->put($avatarPath, file_get_contents($avatar));

            $user->avatar = $avatarPath;
            $user->save();
        }

        return redirect()->route('account')->with('success', 'Аватар успешно обновлен.');
    }
}
