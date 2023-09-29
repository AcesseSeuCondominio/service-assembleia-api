<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;

class VotoEvent implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    private $data;
    private $emp_codigo;

    public function __construct($data, $emp_codigo)
    {
        $this->data = $data;
        $this->emp_codigo = $emp_codigo;
    }

    public function broadcastOn()
    {
        return new Channel("assembleia.{$this->emp_codigo}");
    }

    public function broadcastAs(): string
    {
        return 'VotoEvent';
    }
}
