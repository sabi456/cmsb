<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\DatabaseNotification;

class post extends Model
{
    use HasFactory, SoftDeletes, Notifiable;
    
    protected $fillable = [
        'name',
        'cin',
        'city_b',
        'date_b',
        'adress',
        'phone',
        'mail',
        'note',
        'pict',
        'cin_pict',
        'magasin_pict',
        'entreprise_pict',
        'payment_pict',
        'name_e',
        'cat',
        'phone_e',
        'nbr_of_em',
        'adress_e',
        'ice',
        'rc',
        'payer',
        'number_v',
        'pay_name',
        'status'
    ];
    
    public function getRouteKeyName()
    {
        return 'id';
    }
    public function user1()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function user2()
    {
        return $this->belongsTo(User::class, 'user_id2');
    }
    public function user3()
    {
        return $this->belongsTo(User::class, 'user_id3');
    }
    public function notifications()
    {
        return $this->morphMany(DatabaseNotification::class, 'notifiable')
                    ->orderBy('created_at', 'desc');
    } 
}
