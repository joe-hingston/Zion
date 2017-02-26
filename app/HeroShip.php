<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HeroShip extends Model
{
    protected $fillable = ['ship_id','hero_ship_name','stats'];

     public function ship(){
         return $this->belongsTo(Ship::class);
     }

    public function hero(){
        return $this->belongsTo(Hero::class);
    }
}
//pivot table for ship_upgrades + hero_ship