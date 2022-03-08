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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('invite_id')->constrained();
            $table->date('akad_date')->nullable();
            $table->time('akad_time')->nullable();
            $table->string('akad_place')->nullable();
            $table->string('akad_address')->nullable();

            $table->date('resepsi_date')->nullable();
            $table->time('resepsi_time')->nullable();
            $table->string('resepsi_place')->nullable();
            $table->string('resepsi_address')->nullable();

            $table->longText('google_maps')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
};
