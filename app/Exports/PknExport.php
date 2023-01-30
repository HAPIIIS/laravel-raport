<?php

namespace App\Exports;

use App\Models\PKN;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PknExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return PKN::all();
    }
    public function headings(): array
    {
        return ["no", "nisn", "nama", "kelas", "ph1", "ph2", "ph3", "ph4", "ph5", "ph6", "ph7", "ph8", "ph9"];
    }
}
