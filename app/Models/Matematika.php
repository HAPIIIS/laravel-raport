<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matematika extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'matematika';
    protected $guarded = ['id'];
}
