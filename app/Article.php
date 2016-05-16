<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    protected $fillable = [
        'id', 'titre', 'auteur', 'pays', 'numeroPage'
    ];

    public function listeRevues(){
        return $this->belongsToMany('App\Revue','articles_revues','articleID','revueID');
    }

    public function listeTags(){

        return $this->belongsToMany('App\Tag','tags_articles','tagID','articleID');

    }

}
