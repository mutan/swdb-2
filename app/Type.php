<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
	protected $fillable = ['name'];

    public function cards()
    {
        return $this->belongsToMany('App\Card', 'card_type', 'type_id', 'card_id')
            ->withTimestamps();
    }
}
