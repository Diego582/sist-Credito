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
        Schema::create('beneficiario_cuenta', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('beneficiario_id');
            $table->unsignedBigInteger('cuenta_id');
            $table->foreign('beneficiario_id')->references('id')->on('beneficiarios');
            $table->foreign('cuenta_id')->references('id')->on('cuentas');
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
        Schema::dropIfExists('beneficiario_cuenta');
    }
};
