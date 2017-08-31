<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = [
        'edition_id',
        'rarity_id',
        'name',
        'number',
        'image',
        'firepower',
        'defence',
        'energy',
        'dopotsek',
        'strategy_points',
        'features_line',
        'command_line_1',
        'command_line_2',
        'flavor',
        'erratas',
        'comments'
    ];

    public function races()
    {
        return $this->belongsToMany('App\Race', 'card_race', 'card_id', 'race_id')
            ->withTimestamps();
    }

    public function types()
    {
        return $this->belongsToMany('App\Type', 'card_type', 'card_id', 'type_id')
            ->withTimestamps();
    }

    public function artists()
    {
        return $this->belongsToMany('App\Artist', 'card_artist', 'card_id', 'artist_id')
            ->withTimestamps();
    }

    public function edition()
    {
        return $this->belongsTo('App\Edition');
    }

    public function rarity()
    {
        return $this->belongsTo('App\Rarity');
    }

}
