<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArchiveData;

class ArchiveController extends Controller
{
    public function show(){
        return view('admin.archive',[
            "sub_page" => "Document Archive",
            "archive" => ArchiveData::all(),
        ]);
    }
}

