<?php

namespace App\Http\Controllers;

use App\Models\IPA;
use App\Imports\IpaImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class IpaController extends Controller
{
    public function show(){
        return view('admin.mapel.ipa',[
            "sub_page" => "Nilai Ilmu Pengetahuan Alam",
            "nilai_ipa" => IPA::latest()->filter(request(['search']))->orderBy('nama_siswa')->paginate(10)
        ]);
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'nisn' => 'required',
            'nama_siswa' => 'required',
        ]);

        $data = new IPA();
        $data->nisn = $request->nisn;
        $data->nama_siswa = $request->nama_siswa;
        $data->kelas = $request->kelas;
        $data->ph1 = $request->ph1;
        $data->ph2 = $request->ph2;
        $data->ph3 = $request->ph3;
        $data->ph4 = $request->ph4;
        $data->ph5 = $request->ph5;
        $data->ph6 = $request->ph6;
        $data->ph7 = $request->ph7;
        $data->ph8 = $request->ph8;
        $data->ph9 = $request->ph9;
        $data->save();

        return redirect('/nilai/ipa');
    }

    public function edit(Request $request, $id){
        $data = IPA::find($id);
        return view('admin.mapel.ipa',compact('data'));
    }

    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'nisn' => 'required',
            'nama_siswa' => 'required',
        ]);

        $data = IPA::find($id);
        $data->nisn = $request->nisn;
        $data->nama_siswa = $request->nama_siswa;
        $data->kelas = $request->kelas;
        $data->ph1 = $request->ph1;
        $data->ph2 = $request->ph2;
        $data->ph3 = $request->ph3;
        $data->ph4 = $request->ph4;
        $data->ph5 = $request->ph5;
        $data->ph6 = $request->ph6;
        $data->ph7 = $request->ph7;
        $data->ph8 = $request->ph8;
        $data->ph9 = $request->ph9;
        $data->save();

        return redirect('/nilai/ipa');

    }

    public function hapus(Request $request, $id)
    {
        $data = IPA::where('id', $id)->first();
        if ($data != null) {
            $data->delete();
        }
        return redirect('/nilai/ipa');
    }

    public function import(Request $request) 
	{
		// validasi
		$this->validate($request, [
			'import_excel' => 'required|mimes:csv,xls,xlsx'
		]);
 
		// menangkap file excel
		$file = $request->file('import_excel');
 
		// membuat nama file unik
		$nama_file = $file->getClientOriginalName();
 
		// upload ke folder file_siswa di dalam folder public
		$file->storeAs('/public/ipa',$nama_file);
 
		// import data
		Excel::import(new IpaImport, storage_path('app\public\ipa\\'. $nama_file));

		// alihkan halaman kembali
		return redirect('/nilai/ipa');
	}
}
