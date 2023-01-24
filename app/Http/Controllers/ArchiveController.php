<?php

namespace App\Http\Controllers;

use App\Models\ArchiveData;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;



class ArchiveController extends Controller
{
    public function show(){
        return view('admin.archive',[
            "sub_page" => "Document Archive",
            "archive" => ArchiveData::latest()->filter(request(['search']))->paginate(5)
        ]);
    }

    public function index(Request $request){
        $validatedData = $request->validate([
            'nama_uploader' => 'required',
            'nama_file' => 'required',
            'dokumen_file' => 'mimes:doc,docx,xlsx,pdf,pptx,mp4,jpeg,jpg,png'
        ]);
        
        $dokumen_file = $request->file('dokumen_file');
        $nama_dokumen = rand(0,999999) . $request->file('dokumen_file')->getClientOriginalName(); 
        // $dokumen_file->move(public_path('dokumen/'), $nama_dokumen);
        $dokumen_file->storeAs('/public/dokumen', $nama_dokumen);
        
        $data = new ArchiveData();
        $data->nama_uploader = $request->nama_uploader;
        $data->tgl_upload = $request->tgl_upload;
        $data->nama_file = $request->nama_file;
        $data->jenis_file = $request->jenis_file;
        $data->dokumen_file = $nama_dokumen;
        $data->save();

        return redirect('/archive');
    }

    public function edit(Request $request, $id){
        $data = ArchiveData::find($id);
        return view('admin.archive',compact('data'));
    }

    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'nama_uploader' => 'required',
            'nama_file' => 'required',
        ]);

        $data = ArchiveData::find($id);
        $data->nama_uploader = $request->nama_uploader;
        $data->tgl_upload = $request->tgl_upload;
        $data->nama_file = $request->nama_file;
        $data->save();

        return redirect('/archive');

    }

    public function hapus(Request $request, $id)
    {
        $data = ArchiveData::where('id', $id)->first();
        if ($data != null) {
            unlink(storage_path('app\public\dokumen\\').$data->dokumen_file);
            $data->delete();
        }
        return redirect('/archive');
    }
}

