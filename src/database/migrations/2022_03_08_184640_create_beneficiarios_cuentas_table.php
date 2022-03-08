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
        Schema::create('beneficiarios_cuentas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('beneficiarios_id');
            $table->unsignedBigInteger('cuentas_id');
            $table->foreign('beneficiarios_id')->references('id')->on('beneficiarios');
            $table->foreign('cuentas_id')->references('id')->on('cuentas');
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
        Schema::dropIfExists('beneficiarios_cuentas');
    }
};
