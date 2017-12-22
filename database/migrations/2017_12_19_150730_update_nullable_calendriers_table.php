<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateNullableCalendriersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('calendriers', function (Blueprint $table) {
            $table->integer('jour')->nullable()->change();
            $table->text('message')->nullable()->change();
            $table->integer('image_id')->nullable()->change();
            $table->string('fondcouleur_id')->nullable()->change();
            $table->integer('user_id')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('calendriers', function (Blueprint $table) {
            Schema::dropIfExists('calendriers', function (Blueprint $table) {
            //
        });
        });
    }
}
