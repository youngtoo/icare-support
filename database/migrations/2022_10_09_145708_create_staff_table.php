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
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('staff_no', 15)->comment('Number')->nullable($value = true);
            $table->string('staff_name', 150)->comment('Staff Name')->nullable($value = false);
            $table->text('description')->comment('Staff Description')->nullable($value = true);
            $table->unsignedBigInteger('status_id')->nullable($value = true);
            $table->foreign('status_id')->references('gs_id')->on('general_statuses');
            $table->softDeletes($column = 'deleted_at', $precision = 0);
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
        Schema::dropIfExists('staff');
    }
};
