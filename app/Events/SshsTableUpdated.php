<?php

namespace App\Events;

use App\Models\Ssh;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SshsTableUpdated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    protected Ssh $ssh;

    /**
     * Create a new event instance.
     */
    public function __construct($ssh)
    {
        $this->ssh = $ssh;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('tables-cache-channel'),
        ];
    }
}
