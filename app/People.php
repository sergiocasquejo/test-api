<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'people';
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'birth_year',
        'eye_color',
        'gender', 
        'hair_color', 
        'height', 
        'mass',
        'skin_color',
        'homeworld', 
        'films', 
        'species', 
        'starships',
        'vehicles',
        'url',
        'created',
        'edited'
    ];
}
