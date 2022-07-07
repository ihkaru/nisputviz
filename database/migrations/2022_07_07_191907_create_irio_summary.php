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
        Schema::create('irio_summary', function (Blueprint $table) {
            $table->id();
            $table->char('kode_prov', 2);
            $table->string('provinsi');
            $table->string('kode_kategori', 10);
            $table->string('kategori');
            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();
            $table->string('variable');
            $table->double('value')->default(0);
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
        Schema::dropIfExists('irio_summary');
    }
};
