<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    protected $fillable = [
        'id', 'titre'
    ];

    public function listeArticles(){

        return $this->belongsToMany('App\Article');

    }
}
