<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = ['name'];

    public function cards()
    {
        return $this->belongsToMany('App\Card', 'card_artist', 'artist_id', 'card_id')
            ->withTimestamps();
    }
}
