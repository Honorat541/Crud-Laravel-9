<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;

    //relations


    protected $fillable = [
        'nom_employe', 'prenom_employe','groupe_employe','statut_employe','directions_id','bureaux_id'
    ];

    public function bureau(){
        return $this->belongsTo(Bureau::class, "bureaux_id");
    }

    public function direction(){
        return $this->belongsTo(Direction::class, "directions_id");
    }
}
