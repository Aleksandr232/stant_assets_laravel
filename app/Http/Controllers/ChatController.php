<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\MessageForm;
use App\Models\User;
use App\Models\ChatMessage;
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
        $chatId = $this->getChatId($recipientId, $senderId);

        $message = $request->user()
            ->messages()
            ->create(array_merge($request->validated(), [
                'recipient_id' => $recipientId,
                'sender_id' => $senderId,
            ]));

        $chatMessage = $message->chatMessage()->create([
            'chat_id' => 'chat_id' . $chatId . $senderId,
        ]);

        broadcast(new MessageSent($message, $recipientId, $senderId));

        return $message;
    }

    private function getChatId($recipientId, $senderId)
    {
        $participants = [$recipientId, $senderId];
        sort($participants);
        return implode('-', $participants);
    }


    public function getMessages($userId, $recipientId)
{
    $chatId = $this->getChatId($userId, $recipientId);

    $messages = Message::whereHas('chatMessage', function ($query) use ($chatId) {
        $query->where('chat_id', 'like', $chatId . '%');
    })
    ->orderBy('chat_id', 'asc')
    ->orderBy('created_at', 'asc')
    ->get()
    ->groupBy('chat_id');

    $response = [];
    foreach ($messages as $chatId => $chatMessages) {
        $response[$chatId] = $chatMessages;
    }

    ksort($response);

    return response()->json($response);
}




}
