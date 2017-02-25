<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ship extends Model
{
    public function heroes(){
        $this->HasMany(HeroShip::class);
    }
}
