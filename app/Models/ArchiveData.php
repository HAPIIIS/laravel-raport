<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArchiveData extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'archive_data';
    protected $fillable = [
        'nama_uploader',
        'tgl_upload',
        'nama_file',
        'jenis_file',
        'dokumen_file',
    ];

    public function scopeFilter($query, array $filters){
        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('nama_uploader', 'like', '%'. $search . '%')
            ->orWhere('nama_file', 'like', '%' . $search . '%');
        });
    }
}
