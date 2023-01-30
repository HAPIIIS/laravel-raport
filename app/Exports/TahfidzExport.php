<?php

namespace App\Exports;

use App\Models\Tahfidz;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TahfidzExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Tahfidz::all();
    }
    public function headings(): array
    {
        return ["no", "nisn", "nama", "kelas", "tahsin_januari", "tahfidz_januari", "tahsin_februari", "tahfidz_februari", "tahsin_maret", "tahfidz_maret", "tahsin_april", "tahfidz_april", "tahsin_mei", "tahfidz_mei", "tahsin_juni", "tahfidz_juni"];
    }
}
