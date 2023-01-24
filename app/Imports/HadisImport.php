<?php

namespace App\Imports;

use App\Models\Hadis;
use Maatwebsite\Excel\Concerns\ToModel;

class HadisImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Hadis([
            'nisn' => $row[1],
            'nama_siswa' => $row[2],
            'kelas' => $row[3],
            'd1' => $row[4] ?? 'belum mengisi',
            'd2' => $row[5] ?? 'belum mengisi',
            'd3' => $row[6] ?? 'belum mengisi',
            'd4' => $row[7] ?? 'belum mengisi',
            'd5' => $row[8] ?? 'belum mengisi',
            'd6' => $row[9] ?? 'belum mengisi',
            'h1' => $row[10] ?? 'belum mengisi',
            'h2' => $row[11] ?? 'belum mengisi',
            'h3' => $row[12] ?? 'belum mengisi',
            'h4' => $row[13] ?? 'belum mengisi',
            'h5' => $row[14] ?? 'belum mengisi',
            'h6' => $row[15] ?? 'belum mengisi',
        ]);
    }
}
