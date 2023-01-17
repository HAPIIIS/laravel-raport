<?php

namespace App\Imports;

use App\Models\PJOK;
use Maatwebsite\Excel\Concerns\ToModel;

class PjokImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new PJOK([
            'nisn' => $row[1],
            'nama_siswa' => $row[2],
            'kelas' => $row[3],
            'ph1' => $row[4] ?? '0',
            'ph2' => $row[5] ?? '0',
            'ph3' => $row[6] ?? '0',
            'ph4' => $row[7] ?? '0',
            'ph5' => $row[8] ?? '0',
            'ph6' => $row[9] ?? '0',
            'ph7' => $row[10] ?? '0',
            'ph8' => $row[11] ?? '0',
            'ph9' => $row[12] ?? '0',
        ]);
    }
}
