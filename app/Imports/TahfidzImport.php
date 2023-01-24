<?php

namespace App\Imports;

use App\Models\Tahfidz;
use Maatwebsite\Excel\Concerns\ToModel;

class TahfidzImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Tahfidz([
            'nisn' => $row[1],
            'nama_siswa' => $row[2],
            'kelas' => $row[3],
            'sin_jan' => $row[4] ?? 'belum mengisi',
            'fiz_jan' => $row[5] ?? 'belum mengisi',
            'sin_feb' => $row[6] ?? 'belum mengisi',
            'fiz_feb' => $row[7] ?? 'belum mengisi',
            'sin_mar' => $row[8] ?? 'belum mengisi',
            'fiz_mar' => $row[9] ?? 'belum mengisi',
            'sin_apr' => $row[10] ?? 'belum mengisi',
            'fiz_apr' => $row[11] ?? 'belum mengisi',
            'sin_mei' => $row[12] ?? 'belum mengisi',
            'fiz_mei' => $row[13] ?? 'belum mengisi',
            'sin_jun' => $row[14] ?? 'belum mengisi',
            'fiz_jun' => $row[15] ?? 'belum mengisi',
        ]);
    }
}
