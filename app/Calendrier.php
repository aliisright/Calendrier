<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calendrier extends Model
{
    public function icon() {
      return $this->belongsTo('App\Icon', 'icon_id', 'id');
    }

    public function image() {
      return $this->belongsTo('App\Image', 'image_id', 'id');
    }

    public function fondcouleur() {
      return $this->belongsTo('App\Fondcouleur', 'fondcouleur_id', 'id');
    }

    public function user() {
      return $this->belongsTo('App\user', 'user_id', 'id');
    }
}
