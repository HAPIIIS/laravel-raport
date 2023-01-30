<?php

namespace App\Exports;

use App\Models\Hadis;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class HadisExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Hadis::all();
    }
    public function headings(): array
    {
        return ["no", "nisn", "nama", "kelas", "doa1", "doa2", "doa3", "doa4", "doa5", "doa6", "hadis1", "hadis2", "hadis3", "hadis4", "hadis5", "hadis6"];
    }
}
