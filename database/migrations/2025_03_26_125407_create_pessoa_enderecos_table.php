<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pessoa_enderecos', function (Blueprint $table) {
            $table->foreignId('pes_id')->constrained('pessoas', 'pes_id');
            $table->foreignId('end_id')->constrained('enderecos', 'end_id');
            $table->primary(['pes_id', 'end_id']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pessoa_enderecos');
    }
};
