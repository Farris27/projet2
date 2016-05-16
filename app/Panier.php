<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Panier extends Model
{
    protected $table = 'paniers';
    protected $fillable = ['dateCreation',  'valide', 'paye'];
    public $timestamps = false;
    // Relation with User
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function order_items()
    {
        return $this->hasMany('App\Revue_Panier'); }
}
