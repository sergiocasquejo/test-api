<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'films';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'episode_id',
        'opening_crawl',
        'director', 
        'producer', 
        'release_date', 
        'species',
        'starships',
        'vehicles', 
        'characters', 
        'planets', 
        'url',
        'created',
        'edited'
    ];
}
