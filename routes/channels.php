<?php

use Illuminate\Support\Facades\Broadcast;
use App\Broadcasting\ChatChannel;
use Illuminate\Support\Facades\Auth;

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

/* Broadcast::channel('chat', ChatChannel::class); */

/* Broadcast::channel('chat.{recipientId}', function ($user) {
    return Auth::check();
  }); */

  Broadcast::channel('chat.{recipientId}.{senderId}', ChatChannel::class);


 /*  Broadcast::channel('chat.{recipientId}.{senderId}', function ($user, $recipientId, $senderId) {
    return ($user->id == $recipientId|| $user->id == $senderId);
});
 */
