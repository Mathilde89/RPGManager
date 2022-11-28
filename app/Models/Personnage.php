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
        'user_id',
        'group_id',
        
    ];

    public function users(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function groupes(){
        return $this->belongsTo(Groupe::class,'group_id','id');
    }
    public function invitations(){
        return $this->hasMany(Invitation::class,'invité_id','id');
    }

}
