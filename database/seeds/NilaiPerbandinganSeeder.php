<?php

use App\NilaiPerbandingan;
use Illuminate\Database\Seeder;

class NilaiPerbandinganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $records = [
            [1, 1, 1],
            [1, 2, 5],
            [1, 3, 3],
            [1, 4, 3],
            [1, 5, 3],
            [1, 6, 5],
            [2, 1, 0.2],
            [2, 2, 1],
            [2, 3, 1],
            [2, 4, 3],
            [2, 5, 1],
            [2, 6, 1],
            [3, 1, 0.33],
            [3, 2, 1],
            [3, 3, 1],
            [3, 4, 1],
            [3, 5, 3],
            [3, 6, 1],
            [4, 1, 0.33],
            [4, 2, 0.33],
            [4, 3, 1],
            [4, 4, 1],
            [4, 5, 1],
            [4, 6, 1],
            [5, 1, 0.33],
            [5, 2, 1],
            [5, 3, 0.33],
            [5, 4, 1],
            [5, 5, 1],
            [5, 6, 3],
            [6, 1, 0.2],
            [6, 2, 1],
            [6, 3, 1],
            [6, 4, 1],
            [6, 5, 0.33],
            [6, 6, 1]
        ];

        foreach ($records as $i => $rec) {
            $nilai = NilaiPerbandingan::find($i+1);
            $nilai->update([
                'kriteria_ahp_id' => $rec[0],
                'target_kriteria_ahp_id' => $rec[1],
                'nilai_perbandingan' => $rec[2]
            ]);
        }
    }
}
