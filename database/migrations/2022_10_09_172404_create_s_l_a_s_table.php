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
        Schema::create('s_l_a_s', function (Blueprint $table) {
            $table->id();
            $table->string('sla_level', 15)->nullable($value = false);
            $table->text('definition')->nullable($value = true);
            $table->text('description')->nullable($value = true);
            $table->integer('response')->nullable($value = true);
            $table->integer('resolution')->nullable($value = true);
            $table->boolean('active')->default($value = true);
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
        Schema::dropIfExists('s_l_a_s');
    }
};
