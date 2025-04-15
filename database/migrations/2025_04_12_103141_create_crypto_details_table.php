<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCryptoDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('crypto_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_asset')->constrained('assets')->onDelete('cascade');
            $table->decimal('jumlah_koin', 20, 8);
            $table->decimal('harga_per_koin', 20, 2);
            $table->decimal('nilai_total', 20, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('crypto_details');
    }
};

