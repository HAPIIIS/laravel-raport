<?php

namespace App\Exports;

use App\Models\PJOK;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PjokExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return PJOK::all();
    }
    public function headings(): array
    {
        return ["no", "nisn", "nama", "kelas", "ph1", "ph2", "ph3", "ph4", "ph5", "ph6", "ph7", "ph8", "ph9"];
    }
}
