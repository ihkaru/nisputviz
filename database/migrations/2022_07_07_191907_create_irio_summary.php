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
            $table->char('kode_provinsi', 2);
            $table->string('provinsi',150);
            $table->string('kode_kategori', 10);
            $table->string('kategori',150);
            $table->string('variable',150);
            $table->double('value')->default(0);
            $table->softDeletes();
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
