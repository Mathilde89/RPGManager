<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'detail',
        'nbplace',
        'author_id',
        
    ];

    public function users(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function personnages(){
        return $this->hasMany(Personnage::class,'group_id','id');
    }
    public function invitations(){
        return $this->hasMany(Invitation::class,'crew_id','id');
    }
}
