<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertCouleursInFondCouleurs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fondcouleurs', function (Blueprint $table) {

         DB::table('fondcouleurs')->delete();

         DB::table('fondcouleurs')->insert(array(
            array(
            'name' => 'gris',
            'code' => '#e9e9e9'
            ),
            array(
            'name' => 'bleuCiel',
            'code' => '#B0EBFA'
            ),
            array(
            'name' => 'marron',
            'code' => '#DFDDC7'
            ),
            array(
            'name' => 'orange',
            'code' => '#FBC58E'
            ),
            array(
            'name' => 'rose',
            'code' => '#F5B6C8'
            ),
            array(
            'name' => 'turquoise',
            'code' => '#B6EDD6'
            ),
            array(
            'name' => 'vert',
            'code' => '#cce5cc'
            ),
            array(
            'name' => 'violine',
            'code' => '#DDB8ED'
            )
          ));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fondcouleurs', function (Blueprint $table) {
            //
        });
    }
}
