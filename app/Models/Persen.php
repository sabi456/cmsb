<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persen extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'cin', 'city_b', 'date_b', 'adress', 'phone', 'mail', 'note'];
}
