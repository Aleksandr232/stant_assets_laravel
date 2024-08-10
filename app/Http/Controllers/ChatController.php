<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Message;
use App\Events\MessageSent;

class ChatController extends Controller
{
    public function sendMessage(Request $request)
    {
        $this->validate($request, [
            'message' => 'required',
        ]);

        $message = new Message();
        $message->user_id = Auth::id();
        $message->message = $request->input('message');
        $message->save();

        $user = Auth::user();
        broadcast(new MessageSent($message, $user))->toOthers();

        return response()->json(['message' => 'Message sent successfully']);
    }

    public function getMessages()
    {
        $messages = Message::with('user')->orderBy('created_at', 'desc')->get();

        return response()->json($messages);
    }

    public function getUsers()
    {
        $users = User::all();

        return response()->json($users);
    }
}
