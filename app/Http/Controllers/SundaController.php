<?php

namespace App\Http\Controllers;

use App\Exports\SundaExport;
use App\Imports\SundaImport;
use App\Models\Sunda;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class SundaController extends Controller
{
    public function show(){
        return view('admin.mapel.sunda',[
            "sub_page" => "Nilai Bahasa Sunda",
            "nilai_sunda" => Sunda::latest()->filter(request(['search']))->orderBy('nama_siswa')->paginate(10)
        ]);
    }

    public function export_excel()
	{
		return Excel::download(new SundaExport, 'sunda.xlsx');
	}

    public function store(Request $request){
        $validatedData = $request->validate([
            'nisn' => 'required',
            'nama_siswa' => 'required',
        ]);

        $data = new Sunda();
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

        return redirect('/nilai/sunda');
    }

    public function edit(Request $request, $id){
        $data = Sunda::find($id);
        return view('admin.mapel.sunda',compact('data'));
    }

    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'nisn' => 'required',
            'nama_siswa' => 'required',
        ]);

        $data = Sunda::find($id);
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

        return redirect('/nilai/sunda');

    }

    public function hapus(Request $request, $id)
    {
        $data = Sunda::where('id', $id)->first();
        if ($data != null) {
            $data->delete();
        }
        return redirect('/nilai/sunda');
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
		$file->storeAs('/public/sunda',$nama_file);
 
		// import data
		Excel::import(new SundaImport, storage_path('app\public\sunda\\'. $nama_file));

		// alihkan halaman kembali
		return redirect('/nilai/sunda');
	}
}
