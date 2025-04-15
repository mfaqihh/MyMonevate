<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSahamDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('saham_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_asset')->constrained('assets')->onDelete('cascade');
            $table->integer('jumlah_lot');
            $table->decimal('harga_per_lot', 20, 2);
            $table->decimal('nilai_total', 20, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('saham_details');
    }
};
