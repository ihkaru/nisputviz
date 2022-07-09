<?php

namespace Database\Seeders;

use App\Models\IrioIntraInter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IrioIntraInterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csvFile = fopen(base_path("./database/data/irio_intra_inter.csv"), "r");

        $firstline = true;

        $irio = [];
        IrioIntraInter::truncate();
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if ($firstline) {
                $firstline = false;
                continue;
            }
            $irio[] = [
                'kode_provinsi' => $data[1],
                'provinsi' => $data[0],
                'kode_kategori' => $data[3],
                'kategori' => $data[2],
                'output' => $data[4],
                'persentase_permintaan_antara_intraregional' => $data[5],
                'persentase_permintaan_antara_interregional' => $data[6],
                'persentase_permintaan_akhir_intraregional' => $data[7],
                'persentase_permintaan_akhir_interregional' => $data[8],
                'angka_pengganda_output_intraregional' => $data[9],
                'angka_pengganda_output_interreginal' => $data[10],
                'angka_pengganda_pendapatan_intraregional' => $data[11],
                'angka_pengganda_pendapatan_interregional' => $data[12],
                'created_at' => now(),
                'updated_at' => now()
            ];
        }

        foreach (array_chunk($irio, 1000) as $i) {
            IrioIntraInter::insert($i);
        }
        fclose($csvFile);
    }
}
