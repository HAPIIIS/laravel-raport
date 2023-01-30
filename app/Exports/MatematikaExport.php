<?php

namespace App\Exports;

use App\Models\Matematika;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class MatematikaExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Matematika::all();
    }
    public function headings(): array
    {
        return ["no", "nisn", "nama", "kelas", "ph1", "ph2", "ph3", "ph4", "ph5", "ph6", "ph7", "ph8", "ph9"];
    }
}
