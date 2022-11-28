<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnage extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'description',
        'spécialité',
        'mag',
        'for',
        'agi',
        'int',
        'pv',
        
    ];
}
