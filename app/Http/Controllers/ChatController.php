<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Message;
use App\Models\Chat;
use App\Events\MessageSent;

class ChatController extends Controller
{
    public function createChat(Request $request)
    {
        $this->validate($request, [
            // 'name' => 'required', // Не нужно, будем использовать имя пользователя
        ]);

        $user = Auth::user(); // Получаем авторизованного пользователя

        $chat = Chat::create([
            'name' => $user->name . "'s Chat", // Используем имя пользователя для названия чата
        ]);

        $chat->users()->attach($user->id); // Связываем чат с авторизованным пользователем

        return response()->json(['chat' => $chat]);
    }
    
    public function sendMessage(Request $request, $chatId)
    {
        $this->validate($request, [
            'message' => 'required',
        ]);

        $chat = Chat::findOrFail($chatId);

        $message = $chat->messages()->create([
            'user_id' => Auth::id(),
            'message' => $request->input('message'),
        ]);

        $user = Auth::user();
        broadcast(new MessageSent($message, $user))->toOthers();

        return response()->json(['message' => 'Message sent successfully']);
    }

    public function getMessages($chatId)
    {
        $chat = Chat::findOrFail($chatId);
        $messages = $chat->messages()->with('user')->orderBy('created_at', 'desc')->get();

        return response()->json($messages);
    }

    public function getChats()
    {
        $chats = Auth::user()->chats;

        return response()->json($chats);
    }
}
