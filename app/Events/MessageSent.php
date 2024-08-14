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
    public $recipientId;
    public $senderId;



    /**
     * Create a new event instance.
     *
     * @param  \App\Models\Message  $message
     * @param  \App\Models\User  $user
     * @param  int  $recipientId
     * @return void
     */
    public function __construct(Message $message, $recipientId, $senderId)
    {
        $this->message = $message;
        $this->recipientId = $recipientId;
        $this->senderId = $senderId;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('chat.' . $this->recipientId . '.' . $this->senderId);
    }

    public function broadcastWith()
    {
        return [
            'message' => $this->message,
            'sender_id' => $this->senderId,
            'recipient_id' => $this->recipientId,
            
        ];
    }


}
