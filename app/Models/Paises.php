<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paises extends Model
{
    protected $table = 'paises';
    
    protected $fillable = ['nombre','clave','status'];
}
