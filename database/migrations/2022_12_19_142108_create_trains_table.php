<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('azienda');
            $table->string('stazione-di-partenza');
            $table->string('stazione-di-arrivo');
            $table->date('data-partenza');
            $table->date('data-arrivo');
            $table->time('orario-di-partenza');
            $table->time('orario-di-arrivo');
            $table->string('codice-treno');
            $table->tinyInteger('numero-carrozze');
            $table->boolean('in-orario');
            $table->boolean('cancellato');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
