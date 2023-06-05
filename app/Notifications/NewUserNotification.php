<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewUserNotification extends Notification
{
    use Queueable;

    /**
     * The ID of the unconfirmed user.
     *
     * @var int
     */
    public $id;
    
    /**
     * The name of the unconfirmed user.
     *
     * @var string
     */
    public $name;
    
    /**
     * The image path of the unconfirmed user.
     *
     * @var string
     */
    public $picture;
    /**
     * Create a new notification instance.
     *
     * @param int $unconfirmedUserId
     * @param string $unconfirmedUsername
     * @param string $unconfirmedUserimage

     */
    public function __construct(int $id, string $name, string $picture)
    {
        $this->id = $id;
        $this->name = $name;
        $this->picture = $picture;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    { return [
        'id' => $this->id,
        'name' => "A new user {$this->name} has been registered.",
        'picture' => $this->picture
    ];
    }
}
