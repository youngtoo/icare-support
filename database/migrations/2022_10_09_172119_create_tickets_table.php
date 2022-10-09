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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('team_id')->nullable($value = true);
            $table->unsignedBigInteger('sla_id')->nullable($value = true);
            $table->unsignedBigInteger('status_id')->nullable($value = true);
            $table->unsignedBigInteger('staff_id')->nullable($value = true);
            $table->unsignedBigInteger('assigned_id')->nullable($value = true);
            $table->unsignedBigInteger('category_id')->nullable($value = true);
            $table->unsignedBigInteger('attachment_id')->nullable($value = true);

            $table->text('title')->nullable($value = false);
            $table->text('description')->nullable($value = true);
            $table->text('rca')->nullable($value = true);

            $table->softDeletes($column = 'deleted_at', $precision = 0);
            $table->timestamps();
            
            $table->foreign('sla_id')->references('id')->on('s_l_a_s');
            $table->foreign('status_id')->references('id')->on('issue_statuses');
            $table->foreign('team_id')->references('id')->on('teams');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('staff_id')->references('id')->on('staff');
            $table->foreign('assigned_id')->references('id')->on('users');
            $table->foreign('attachment_id')->references('id')->on('ticket_attachments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
};
