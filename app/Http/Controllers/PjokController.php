<?php

namespace App\Http\Controllers;

use App\Exports\PjokExport;
use App\Models\PJOK;
use App\Imports\PjokImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PjokController extends Controller
{
    public function show(){
        return view('admin.mapel.pjok',[
            "sub_page" => "Nilai Pendidikan Jasmani, Olahraga, dan Kesehatan",
            "nilai_pjok" => PJOK::latest()->filter(request(['search']))->orderBy('kelas', 'asc')->orderBy('nama_siswa', 'desc')->paginate(10)
        ]);
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'nisn' => 'required',
            'nama_siswa' => 'required',
        ]);

        $data = new PJOK();
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

        return redirect('/nilai/pjok');
    }

    public function edit(Request $request, $id){
        $data = PJOK::find($id);
        return view('admin.mapel.pjok',compact('data'));
    }

    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'nisn' => 'required',
            'nama_siswa' => 'required',
        ]);

        $data = PJOK::find($id);
        $data->nisn = $request->input('nisn', $data->nisn);
        $data->nama_siswa = $request->input('nama_siswa', $data->nama_siswa);
        $data->kelas = $request->input('kelas', $data->kelas);
        $data->ph1 = $request->input('ph1', $data->ph1);
        $data->ph2 = $request->input('ph2', $data->ph2);
        $data->ph3 = $request->input('ph3', $data->ph3);
        $data->ph4 = $request->input('ph4', $data->ph4);
        $data->ph5 = $request->input('ph5', $data->ph5);
        $data->ph6 = $request->input('ph6', $data->ph6);
        $data->ph7 = $request->input('ph7', $data->ph7);
        $data->ph8 = $request->input('ph8', $data->ph8);
        $data->ph9 = $request->input('ph9', $data->ph9);
        $data->save();

        return redirect('/nilai/pjok');

    }

    public function hapus(Request $request, $id)
    {
        $data = PJOK::where('id', $id)->first();
        if ($data != null) {
            $data->delete();
        }
        return redirect('/nilai/pjok');
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
		$file->storeAs('/public/pjok',$nama_file);
 
		// import data
		Excel::import(new PjokImport, storage_path('app\public\pjok\\'. $nama_file));

		// alihkan halaman kembali
		return redirect('/nilai/pjok');
	}
    
    public function export_excel()
	{
		return Excel::download(new PjokExport, 'pjok.xlsx');
	}
}
