<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    protected $fillable = [
        'id', 'titre', 'auteur', 'pays', 'numeroPage'
    ];

    public function listeRevues(){
        return $this->belongsToMany('App\Revue','tags_articles','tagID','articleID');
    }

    public function listeTags(){

        return $this->belongsToMany('App\Tag','tags_articles','tagID','articleID');

    }

}
