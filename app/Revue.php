<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Revue extends Model
{
    protected $table = 'revues';
    protected $fillable = [
        'id', 'annee', 'fascicule', 'couverture', 'tome'
    ];

    public function listeArticles(){
        
        return $this->belongsToMany('App\Article','articles_revues','articleID','revueID');
        
    }
}
