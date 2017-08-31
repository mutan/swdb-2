<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Edition extends Model
{
    protected $fillable = ['name', 'amount'];

    public function cards()
    {
        return $this->hasMany('App\Card');
    }
}
