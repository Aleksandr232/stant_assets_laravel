<?php

namespace App\Providers;

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\ServiceProvider;
use App\Broadcasting\ChatChannel;

class BroadcastServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    /* public function boot(): void
    {
        Broadcast::routes();

        require base_path('routes/channels.php');
    } */

    public function boot()
       {
           Broadcast::channel('private-chat.{recipientId}', ChatChannel::class);
       }
}
