<?php

namespace App\Imports;

use App\Models\Matematika;
use Maatwebsite\Excel\Concerns\ToModel;

class MatematikaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Matematika([
            'nisn' => $row[1],
            'nama_siswa' => $row[2],
            'kelas' => $row[3],
            'ph1' => $row[4] ?? ' ',
            'ph2' => $row[5] ?? ' ',
            'ph3' => $row[6] ?? ' ',
            'ph4' => $row[7] ?? ' ',
            'ph5' => $row[8] ?? ' ',
            'ph6' => $row[9] ?? ' ',
            'ph7' => $row[10] ?? ' ',
            'ph8' => $row[11] ?? ' ',
            'ph9' => $row[12] ?? ' ',
        ]);
    }
}
