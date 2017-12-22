<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fondcouleur extends Model
{
    public function calendrier() {
      return $this->hasMany('App\Calendrier');
    }
}
