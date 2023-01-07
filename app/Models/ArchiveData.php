<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArchiveData extends Model
{
    use HasFactory;

    protected $table = 'archive_data';
    protected $fillable = [
        'nama_uploader',
        'tgl_upload',
        'nama_file',
        'jenis_file',
        'dokumen_file',

    ];
}
