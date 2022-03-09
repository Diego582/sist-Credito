<?php

use App\Models\Beneficiario;
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
        Schema::create('cliente_credito', function (Blueprint $table) {
            $table->unsignedBigInteger('credito_id');
            $table->unsignedBigInteger('beneficiario_id');
            $table->unsignedBigInteger('tipo_id');
            $table->primary(['credito_id', 'tipo_id']);
            $table->foreign('credito_id')->references('id')->on('creditos');
            $table->foreign('beneficiario_id')->references('id')->on('beneficiarios');
            $table->foreign('tipo_id')->references('id')->on('tipos');
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
        Schema::dropIfExists('cliente_credito');
    }
};
