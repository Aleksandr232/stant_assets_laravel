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
                'chat_id' => 'chat_id' . $chatId,
            ]));

        $chatMessage = $message->ChatMessage()->create([
            'chat_id' => 'chat_id' . $chatId,
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


    /* public function getMessages($recipientId, $senderId)
    {
        $chatId = $this->getChatId($recipientId, $senderId);

        $messages = Message::where('chat_id', "chat_id{$chatId}")
            ->get();

        return response()->json($messages);
    } */

    public function getMessages($recipientId, $senderId)
    {
        $chatId = $this->getChatId($recipientId, $senderId);

        $messages = Message::where('chat_id', "chat_id{$chatId}")
            ->join('users as sender', 'messages.sender_id', '=', 'sender.id')
            ->join('users as recipient', 'messages.recipient_id', '=', 'recipient.id')
            ->select('messages.*', 'sender.name as sender_name', 'recipient.name as recipient_name')
            ->get();

        return response()->json($messages);
    }




}
