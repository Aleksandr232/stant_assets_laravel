<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\MessageForm;
use App\Models\User;
use App\Models\Message;
use App\Events\MessageSent;

class ChatController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }



    public function sendMessage(MessageForm $request, $recipientId, $senderId)
    {
        $message = $request->user()
            ->messages()
            ->create(array_merge($request->validated(), [
                'recipient_id' => $recipientId,
                'sender_id' => $senderId,
            ]));

        broadcast(new MessageSent($message, $recipientId, $senderId));

        return $message;
    }

    public function getAllUsers()
    {
        $users = User::all();
        return response()->json($users);
    }

   /*  public function getMessages($userId, $recipientId)
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
} */

public function getMessages($userId, $recipientId)
{
    $messages = Message::where(function ($query) use ($userId, $recipientId) {
        $query->where('user_id', $userId)
              ->where('recipient_id', $recipientId);
    })
    ->orWhere(function ($query) use ($userId, $recipientId) {
        $query->where('user_id', $recipientId)
              ->where('recipient_id', $userId);
    })
    ->orderBy('created_at', 'asc')
    ->get();

    $formattedMessages = $messages->map(function ($message) use ($userId) {
        return [
            'id' => $message->id,
            'text' => $message->text,
            'created_at' => $message->created_at->format('Y-m-d H:i:s'),
            'sender_id' => $message->user_id,
            'recipient_id' => $message->recipient_id,
            'is_sent_by_user' => $message->user_id == $userId,
        ];
    });

    return response()->json($formattedMessages);
}


}
