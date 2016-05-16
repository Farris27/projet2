<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Revue_Panier extends Model
{
    protected $table = 'revues_paniers';
    protected $fillable = ['prixHTVA', 'quantite', 'revueID', 'panierID'];
    public $timestamps = false;
    public function order()
    {
        return $this->belongsTo('App\Panier');
    }
    public function product()
    {
        return $this->belongsTo('App\Revue');
    }
}
