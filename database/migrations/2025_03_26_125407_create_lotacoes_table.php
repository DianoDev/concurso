<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    public function up()
    {
        Schema::create('lotacoes', function (Blueprint $table) {
            $table->id('lot_id');
            $table->foreignId('pes_id')->constrained('pessoas', 'pes_id');
            $table->foreignId('unid_id')->constrained('unidades', 'unid_id');
            $table->date('lot_data_lotacao');
            $table->date('lot_data_remocao')->nullable();
            $table->string('lot_portaria', 100)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('lotacoes');
    }
};
