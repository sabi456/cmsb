<?php namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Persen extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = ['name', 'cin', 'city_b', 'date_b', 'adress', 'phone', 'mail', 'note'];

    /**
     * Get the unread notifications for the persen.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function unreadNotifications()
    {
        return $this->notifications()->whereNull('read_at');
    }

    /**
     * Get the notifications for the persen.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function notifications()
    {
        return $this->morphMany(DatabaseNotification::class, 'notifiable')
            ->orderBy('created_at', 'desc');
    }
}
