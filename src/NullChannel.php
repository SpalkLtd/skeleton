<?php

namespace NotificationChannels\Null;

use Illuminate\Notifications\Notification;

class NullChannel
{
    public function __construct()
    {
        // 
    }

    /**
     * Send the given notification.
     *
     * @param mixed $notifiable
     * @param \Illuminate\Notifications\Notification $notification
     *
     */
    public function send($notifiable, Notification $notification)
    {
        // 
    }
}
