<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    protected $fillable = ['name_e', 'cat', 'phone_e', 'nbr_of_em', 'adress_e', 'rc', 'cnss', 'id'];
    use HasFactory;
}
