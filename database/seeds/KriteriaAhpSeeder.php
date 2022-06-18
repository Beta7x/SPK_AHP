<?php

use App\KriteriaAHP;
use Illuminate\Database\Seeder;

class KriteriaAhpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $records = [
            (object)[
                'nama' => 'Prioritas Minat',
                'bobot' => 25,
                'tipe' =>  KriteriaAHP::BENEFIT_TYPE,
            ],
            (object)[
                'nama' => 'Nilai UN IPA',
                'bobot' => 15,
                'tipe' =>  KriteriaAHP::BENEFIT_TYPE,
            ],
            (object)[
                'nama' => 'Nilai UN IPS',
                'bobot' => 15,
                'tipe' =>  KriteriaAHP::BENEFIT_TYPE,
            ],
            (object)[
                'nama' => 'Hasil Psikotes',
                'bobot' => 20,
                'tipe' =>  KriteriaAHP::BENEFIT_TYPE,
            ],
            (object)[
                'nama' => 'Nilai Placement Test',
                'bobot' => 10,
                'tipe' =>  KriteriaAHP::BENEFIT_TYPE,
            ],
            (object)[
                'nama' => 'Nilai Wawancara',
                'bobot' => 15,
                'tipe' =>  KriteriaAHP::BENEFIT_TYPE,
            ],
        ];

        foreach ($records as $rec) {
            KriteriaAHP::create([
                "nama" => $rec->nama,
                "bobot" => $rec->bobot,
                "tipe" => $rec->tipe,
            ]);
        }
    }
}
