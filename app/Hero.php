<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    protected $fillable = [
        'hero_name',
        'hero_gender',
        'faction_id',
        'hero_clan_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function faction(){
        return $this->belongsTo(Faction::class);
    }

    public function heroships(){
        return $this->hasMany(HeroShip::class);
    }
}
