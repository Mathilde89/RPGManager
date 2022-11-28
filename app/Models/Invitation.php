<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    use HasFactory;
    protected $fillable =[
        'inviteur_id',
        'invité_id',
        'crew_id',
        
    ];

    public function users(){
        return $this->belongsTo(User::class,);
    }
    public function groupes(){
        return $this->belongsTo(Groupe::class);
    }
    public function personnages(){
        return $this->belongsTo(Personnage::class);
    }
    
}
