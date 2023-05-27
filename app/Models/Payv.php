<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payv extends Model
{
    protected $fillable = ['name', 'id'];
    use HasFactory;
}
