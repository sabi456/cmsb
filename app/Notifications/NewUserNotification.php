<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notifiable;
use Illuminate\Notifications\Notification;

class NewUserNotification extends Notification
{
    use Queueable, Notifiable;

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
    public $picture;
    
    /**
     * The image path of the unconfirmed user.
     *
     * @var string
     */
    public $name;
 

    /**
     * Create a new notification instance.
     *
     * @param int $id
     * @param string $name
     * @param string $picture
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
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'id' => $this->id,
            'name' => "Un nouvel utilisateur {$this->name} a été enregistré.",
            'picture' => $this->picture,
        ];
    }
}
