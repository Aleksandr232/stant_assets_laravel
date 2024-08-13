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

    public function pusherAuth(Request $request)
{
    $pusher = new \Pusher\Pusher(
        config('broadcasting.connections.pusher.key'),
        config('broadcasting.connections.pusher.secret'),
        config('broadcasting.connections.pusher.app_id'),
        [
            'cluster' => config('broadcasting.connections.pusher.cluster'),
            'encrypted' => true,
        ]
    );

    $channelName = 'private-' . Auth::user()->id;
    $socketId = $request->input('socket_id');

    $auth = $pusher->authorizeChannel($channelName, $socketId);

    return response()->json($auth);
}

    public function sendMessage(MessageFormRequest $request)
    {
        $message = $request->user()
                ->messages()
                ->create($request->validated());

            broadcast(new MessageSent($request->user(), $message));

            return $message;
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
