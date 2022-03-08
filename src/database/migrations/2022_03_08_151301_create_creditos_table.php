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
        Schema::create('creditos', function (Blueprint $table) {
            $table->id();
            $table->string('linea');
            $table->decimal('monto', $precision = 10, $scale = 2);
            $table->text('detalle');
            $table->date('fecha_entrega');
            $table->unsignedBigInteger('expediente_id');
            $table->unsignedBigInteger('beneficiario_id');
            $table->foreign('expediente_id')
                ->references('id')
                ->on('expedientes')
                ->onDelete('cascade');
            $table->foreign('beneficiario_id')
                ->references('id')
                ->on('beneficiarios');
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
        Schema::dropIfExists('creditos');
    }
};
