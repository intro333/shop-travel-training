<?php

namespace App\Events;

use App\Events\Event;
use App\Services\Factory\AbstractModelFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class OrderWasChosen extends Event
{
    use SerializesModels;

    public $model;

    /**
     * Create a new event instance.
     *
     * @param AbstractModelFactory $model
     */
    public function __construct(AbstractModelFactory $model)
    {
        $this->model = $model;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}
