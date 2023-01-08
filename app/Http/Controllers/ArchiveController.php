<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArchiveData;
use Illuminate\Support\Facades\DB;

class ArchiveController extends Controller
{
    public function show(){
        $data = ArchiveData::all();
        return view('admin.archive',[
            "sub_page" => "Document Archive",
            "archive" => $data,
        ]);
    }

    public function index(Request $request){
        $this->validate($request, [
            'nama_uploader' => 'required',
            'nama_file' => 'required',
            'dokumen_file' => 'mimes:doc,docx,xlsx,pdf,pptx,mp4,jpeg,png'
        ]);

        $nama_uploader = $request->nama_uploader;
        $tgl_upload = $request->tgl_upload;
        $nama_file = $request->nama_file;
        $jenis_file = $request->jenis_file;
        $dokumen_file = $request->file('dokumen_file');

        $nama_dokumen = $request->file('dokumen_file')->getClientOriginalName(); 
        $dokumen_file->move(public_path('dokumen/'), $nama_dokumen);

        DB::table('archive_data')->insert([
            'nama_uploader' => $nama_uploader,
            'tgl_upload' => $tgl_upload,
            'nama_file' => $nama_file,
            'jenis_file' => $jenis_file,
            'dokumen_file' => $nama_dokumen,
        ]);

        return redirect('/archive')->with('success','Data Berhasil Disimpan!');
        
    }
}

