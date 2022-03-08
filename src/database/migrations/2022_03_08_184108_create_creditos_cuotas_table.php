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
        Schema::create('creditos_cuotas', function (Blueprint $table) {
            $table->unsignedBigInteger('creditos_id');
            $table->unsignedBigInteger('cuotas_id');
            $table->foreign('creditos_id')->references('id')->on('creditos')->onDelete('cascade');
            $table->foreign('cuotas_id')->references('id')->on('cuotas')->onDelete('cascade');
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
        Schema::dropIfExists('creditos_cuotas');
    }
};
