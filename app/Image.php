<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function Calendrier() {
      return $this->hasMany('App\Calendrier');
    }
}
