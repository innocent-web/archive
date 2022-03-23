<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dossier extends Model
{
    public function types(){
        return $this->hasMany('App\Type');
        }
        public function genres(){
            return $this->hasMany('App\Genre');
            }
}
