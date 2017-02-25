<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HeroShip extends Model
{
     public function ship(){
         return $this->belongsTo(Ship::class);
     }

    public function hero(){
        return $this->belongsTo(Hero::class);
    }
}
