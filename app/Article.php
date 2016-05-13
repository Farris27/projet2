<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    protected $fillable = [
        'id', 'titre', 'auteur', 'pays', 'numeroPage'
    ];

    public function listeRevues(){
        return $this->belongsToMany('App\Revue');
    }

}
