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
        Schema::create('brides', function (Blueprint $table) {
            $table->id();
            $table->foreignId('invite_id')->constrained();
            $table->string('fullname_man')->nullable();
            $table->string('username_man')->nullable();
            $table->string('father_man')->nullable();
            $table->string('mother_man')->nullable();
            $table->string('photo_man')->nullable();
            $table->string('fullname_woman')->nullable();
            $table->string('username_woman')->nullable();
            $table->string('father_woman')->nullable();
            $table->string('mother_woman')->nullable();
            $table->string('photo_woman')->nullable();
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
        Schema::dropIfExists('brides');
    }
};
