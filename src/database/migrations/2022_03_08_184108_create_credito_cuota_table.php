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
        Schema::create('credito_cuota', function (Blueprint $table) {
            $table->unsignedBigInteger('credito_id');
            $table->unsignedBigInteger('cuota_id');
            $table->foreign('credito_id')->references('id')->on('creditos')->onDelete('cascade');
            $table->foreign('cuota_id')->references('id')->on('cuotas')->onDelete('cascade');
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
        Schema::dropIfExists('credito_cuota');
    }
};
