<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rarity extends Model
{
    protected $fillable = ['name'];

    public function cards()
    {
        return $this->hasMany('App\Card');
    }
}
