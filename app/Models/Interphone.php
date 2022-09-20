<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interphone extends Model
{
    use HasFactory;




    // relations

    protected $fillable = [
        'numero_interphone','bureaux_id'
    ];

    public function bureau(){
        return $this->belongsTo(Bureau::class, "bureaux_id");
    }
}
