<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Carbon\Carbon;
use App\Models\User;
use App\Models\ArchiveData;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('archive_data')->insert([
            [
                'nama_uploader'=>'Hafizh Trisnindito',
                'tgl_upload'=>Carbon::create('2023','01','07'),
                'nama_file'=>'Proposal KP',
                'jenis_file'=>'docx',
                'dokumen_file'=>'Proposal KP.docx',
            ],
            
        ]);
    }
}
