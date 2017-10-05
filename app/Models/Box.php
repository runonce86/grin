<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Box extends Model
{
    public function pots()
    {
        return $this->hasMany('App\Models\Pot');
    }

    public function wateringCans()
    {
        return $this->hasMany('App\Models\WateringCan');
    }

}
