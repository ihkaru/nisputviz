<?php

namespace Database\Seeders;

use App\Models\IrioSummary;
use Illuminate\Database\Seeder;

class IrioSummarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csvFile = fopen(base_path("database/data/irio_summary.csv"), "r");

        $firstline = true;

        $irio = [];
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if ($firstline) {
                $firstline = false;
                continue;
            }
            $irio[] = [
                'provinsi' => $data[0],
                'kategori' => $data[1],
                'kode_provinsi' => $data[2],
                'latitude' => $data[3],
                'longitude' => $data[4],
                'kode_kategori' => $data[5],
                'variable' => $data[6],
                'value' => $data[7],
                'created_at' => now(),
                'updated_at' => now()
            ];
        }

        foreach (array_chunk($irio, 1000) as $i) {
            IrioSummary::insert($i);
        }
        fclose($csvFile);
    }
}
