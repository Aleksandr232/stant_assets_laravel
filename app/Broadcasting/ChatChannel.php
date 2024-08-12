<?php

namespace App\Broadcasting;

use App\Models\User;

class ChatChannel
{
    /**
     * Create a new channel instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Authenticate the user's access to the channel.
     */
    public function join($user, $recipientId)
       {
           $recipient = User::findOrFail($recipientId);
           return $user->canChatWith($recipient);
       }
}
