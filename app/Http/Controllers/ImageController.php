<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Image;
use App\Fondcouleur;
use App\Calendrier;
use App\User;
use App\Icon;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;


class ImageController extends Controller
{
    public function show() {

      $colors = Fondcouleur::All();

      $entries = Image::All();

      $calendriers = Calendrier::All();

      $icons = Icon::All();

      return view('home', ['entries' => $entries, 'colors' => $colors, 'calendriers' => $calendriers, 'icons' => $icons]);

    }

    public function store(Request $request) {

      if(Input::hasFile('image')) {
          $file = Request()->file('image');
          $extension = $file->getClientOriginalExtension();

          Storage::disk('public')->put(
            $file->getFilename().'.'.$extension,
            File::get($file)
          );

          $entry = new Image();
          $entry->mime = $file->getClientMimeType();
          // $entry->original_filename = $file->getClientOriginalName();
          $entry->name = $file->getFilename().'.'.$extension;
          $entry->path = "../Storage/app/public/".$entry->name;
          $entry->user_id = Auth::User()->id;

          $entry->save();

          $newImageId = Calendrier::where('jour', '=', $request->input('jour'))->first();
          $newImageId->image_id = $entry->id;

          $newImageId->save();
      }


      if($request->input('title') !== null) {
          $titleText = $request->input('title');

          $newTitle = Calendrier::where('jour', $request->input('jour'))->first();
          $newTitle->title = $titleText;

          $newTitle->save();
      }

      if($request->input('message') !== null) {
          $messageText = $request->input('message');

          $newMessage = Calendrier::where('jour', $request->input('jour'))->first();
          $newMessage->message = $messageText;

          $newMessage->save();
      }


      if($request->input('icon') !== null) {

          $newColor = $request->input('icon');

          $NewColorId = Calendrier::where('jour', $request->input('jour'))->first();

          $NewColorId->icon_id = $newColor;

          $NewColorId->save();

      }



      return redirect()->route('image.form');
    }
}
