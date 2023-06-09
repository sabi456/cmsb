<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = ['pict', 'cin_pict', 'magasin_pict', 'entreprise_pict', 'payment_pict', 'id'];
    use HasFactory;
}
