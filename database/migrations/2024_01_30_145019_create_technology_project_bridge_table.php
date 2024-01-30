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
        Schema::create('technology_project_bridge', function (Blueprint $table) {
            $table->unsignedBigInteger('technology_id');
            $table->unsignedBigInteger('project_id');

            $table->foreign('technology_id')->references('id')->on('technologies')->cascadeOnDelete();
            //Use cascade on delete instead of ->nullOnDelete() because a row is deleted from parent it has to be deleted from children tables as well
            $table->foreign('project_id')->references('id')->on('projects')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('technology_project_bridge');
    }
};
