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
        Schema::create('admin_themes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->boolean('dark_mode')->default(false);
            $table->boolean('layout')->default(false);
            $table->boolean('position')->default(false);
            $table->boolean('top_bar_color')->default(false);
            $table->integer('side_bar_color')->default(false);
            $table->string('sidebar_size')->default('default');
            $table->string('direction')->default('LTR');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_themes');
    }
};
