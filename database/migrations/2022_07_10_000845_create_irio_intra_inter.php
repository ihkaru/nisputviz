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
        Schema::create('irio_intra_inter', function (Blueprint $table) {
            $table->id();
            $table->char('kode_provinsi', 2);
            $table->string('provinsi');
            $table->string('kode_kategori', 10);
            $table->string('kategori');
            $table->double('output')->default(0);
            $table->double('persentase_permintaan_antara_intraregional')->default(0);
            $table->double('persentase_permintaan_antara_interregional')->default(0);
            $table->double('persentase_permintaan_akhir_intraregional')->default(0);
            $table->double('persentase_permintaan_akhir_interregional')->default(0);
            $table->double('angka_pengganda_output_intraregional')->default(0);
            $table->double('angka_pengganda_output_interreginal')->default(0);
            $table->double('angka_pengganda_pendapatan_intraregional')->default(0);
            $table->double('angka_pengganda_pendapatan_interregional')->default(0);
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
        Schema::dropIfExists('irio_intra_inter');
    }
};
