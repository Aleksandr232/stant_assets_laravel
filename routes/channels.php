<?php

use Illuminate\Support\Facades\Broadcast;
use App\Broadcasting\ChatChannel;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('chat.{recipientId}', function ($user, $recipientId) {
    $recipient = App\Models\User::findOrFail($recipientId);
    return $user->canChatWith($recipient);
});

