<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Box extends Model
{

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['user_id'];

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        // Apply default scope
        static::addGlobalScope('full', function (Builder $builder) {

            // Include this related models by default
            $builder->with('pots')
                ->with('waterTanks');
        });
    }

    public function pots()
    {
        return $this->hasMany('App\Models\Pot');
    }

    public function waterTanks()
    {
        return $this->hasMany('App\Models\WaterTank');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
