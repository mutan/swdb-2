<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    protected $fillable = ['name'];

    public function cards()
    {
        return $this->belongsToMany('App\Card', 'card_race', 'race_id', 'card_id')
            ->withTimestamps();
    }
}
