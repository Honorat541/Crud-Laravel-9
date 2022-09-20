<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bureau extends Model
{
    use HasFactory;

    protected $table = "bureaux";

    protected $fillable = [
        'nom_bureau', 'emplacement'
    ];



    // relations 

    public function interphones(){
        return $this->hasMany(Interphone::class);
    }
    
    public function Employe(){
        return $this->hasMany(Employe::class);
    }




}
