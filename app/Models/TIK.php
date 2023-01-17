<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TIK extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tik';
    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters){
        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('nisn', 'like', '%'. $search . '%')
            ->orWhere('nama_siswa', 'like', '%' . $search . '%')
            ->orWhere('kelas', 'like', '%' . $search . '%');
        });
    }
}
