<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akhbar extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'detail',
        'datePosted',
        'image'
    ];
    
    public function getRouteKeyName()
    {
        return 'id';
    }
}
