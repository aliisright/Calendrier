<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Calendrier;
use App\User;

class UserController extends Controller
{
    public function createDays(Request $request) {

      for($i = 1; $i<=31; $i++) {

        $newCalendars = new Calendrier();

        $newCalendars->jour = $i;
        $newCalendars->message = null;
        $newCalendars->image_id = null;
        $newCalendars->fondcouleur_id = 1;
        $newCalendars->user_id = Auth::User()->id;
        $newCalendars->icon_id = 1;

        $newCalendars->save();

      }

      return redirect()->route('image.form');

    }
}
