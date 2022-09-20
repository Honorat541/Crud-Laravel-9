<?php

namespace App\Models;

use App\Models\Direction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Direction extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_direction', 'sigle'
    ];

    public function Employe(){
        return $this->hasMany(Employe::class);
    }

}
