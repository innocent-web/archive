<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = [
        'type',
    ];
    public function dossiers(){
        $this->belongsTo('App\Dossier', 'dossier_id', 'id');
    }
}
