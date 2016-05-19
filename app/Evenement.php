<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    //
    protected $table = 'evenements';
    protected $fillable = [
        'id', 'titre', 'texte', 'datePublication', 'image'
    ];

    public $timestamps = false;
}
