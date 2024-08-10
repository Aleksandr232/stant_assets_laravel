<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Message;
use App\Events\MessageSent;

class ChatController extends Controller
{


    public function sendMessage(Request $request, $recipientId)
{
    $this->validate($request, [
        'message' => 'required',
    ]);

    $message = new Message();
    $message->user_id = Auth::id();
    $message->message = $request->input('message');
    $message->recipient_id = $recipientId;
    $message->save();

    $user = Auth::user();
    broadcast(new MessageSent($message, $user, $recipientId))->toChannel('chat.' . $recipientId);

    return response()->json(['message' => 'Message sent successfully']);
}

    public function getAllUsers()
    {
        $users = User::all();
        return response()->json($users);
    }


}
