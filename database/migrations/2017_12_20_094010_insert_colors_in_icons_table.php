<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertColorsInIconsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('icons', function (Blueprint $table) {
         DB::table('icons')->delete();

         DB::table('icons')->insert(array(
            array(
            'color' => 'gris',
            'path' => '../resources/assets/images/icons/gris.png'
            ),
            array(
            'color' => 'bleuCiel',
            'path' => '../resources/assets/images/icons/bleuCiel.png'
            ),
            array(
            'color' => 'marron',
            'path' => '../resources/assets/images/icons/marron.png'
            ),
            array(
            'color' => 'orange',
            'path' => '../resources/assets/images/icons/orange.png'
            ),
            array(
            'color' => 'rose',
            'path' => '../resources/assets/images/icons/rose.png'
            ),
            array(
            'color' => 'turquoise',
            'path' => '../resources/assets/images/icons/turquoise.png'
            ),
            array(
            'color' => 'vert',
            'path' => '../resources/assets/images/icons/vert.png'
            ),
            array(
            'color' => 'violine',
            'path' => '../resources/assets/images/icons/violine.png'
            ),
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
        Schema::dropIfExists('icons', function (Blueprint $table) {
            //
        });
    }
}
