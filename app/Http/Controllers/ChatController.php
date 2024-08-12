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

    $user = $request->user();
    broadcast(new MessageSent($message, $user, $recipientId))->toOthers();

    return response()->json(['message' => 'Message sent successfully']);
}

    public function getAllUsers()
    {
        $users = User::all();
        return response()->json($users);
    }

    public function getMessages($userId, $recipientId)
{
    $messages = Message::where(function ($query) use ($userId, $recipientId) {
        $query->where('user_id', $userId)
              ->where('recipient_id', $recipientId);
    })->orWhere(function ($query) use ($userId, $recipientId) {
        $query->where('user_id', $recipientId)
              ->where('recipient_id', $userId);
    })
    ->orderBy('created_at', 'asc')
    ->get();

    return response()->json($messages);
}




}
