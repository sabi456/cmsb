<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pay extends Model
{
    protected $fillable = ['name', 'number_v', 'pay_name', 'id'];
    use HasFactory;
}
