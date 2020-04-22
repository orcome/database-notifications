<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;

class TaskNotification extends Notification
{
    public function via($notifiable)
    {
        return ['database'];
    }

    public function toArray($notifiable)
    {
        return [
            'data' => 'Ini contoh notifikasi pertama saya',
        ];
    }
}
