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
    public function join(User $user): array|bool
    {
        // Проверяем, авторизован ли пользователь
        if (!auth()->check()) {
            return false;
        }

        

        // Возвращаем данные пользователя
        return [
            'id' => $user->id,
            'name' => $user->name
        ];
    }
}
