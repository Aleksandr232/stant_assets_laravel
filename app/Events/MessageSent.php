<?php
namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Models\Message;
use App\Models\User;

class MessageSent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $message;
    public $user;
    public $recipientId;

    /**
     * Create a new event instance.
     *
     * @param  \App\Models\Message  $message
     * @param  \App\Models\User  $user
     * @param  int  $recipientId
     * @return void
     */
    public function __construct(Message $message, User $user, int $recipientId)
    {
        $this->message = $message;
        $this->user = $user;
        $this->recipientId = $recipientId;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('chat.' . $this->recipientId);
    }
}
