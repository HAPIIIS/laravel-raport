<?php

namespace App\Http\Controllers;

use App\Exports\ArabExport;
use App\Imports\ArabImport;
use App\Models\Arab;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class ArabController extends Controller
{
    public function show(){
        return view('admin.mapel.arab',[
            "sub_page" => "Nilai Bahasa Arab",
            "nilai_arab" => Arab::latest()->filter(request(['search']))->orderBy('kelas', 'asc')->orderBy('nama_siswa', 'desc')->paginate(10)
        ]);
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'nisn' => 'required',
            'nama_siswa' => 'required',
        ]);

        $data = new Arab();
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

        return redirect('/nilai/arab');
    }

    public function edit(Request $request, $id){
        $data = Arab::find($id);
        return view('admin.mapel.arab',compact('data'));
    }

    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'nisn' => 'required',
            'nama_siswa' => 'required',
        ]);

        $data = Arab::find($id);
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

        return redirect('/nilai/arab');

    }

    public function hapus(Request $request, $id)
    {
        $data = Arab::where('id', $id)->first();
        if ($data != null) {
            $data->delete();
        }
        return redirect('/nilai/arab');
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
		$file->storeAs('/public/arab',$nama_file);
 
		// import data
		Excel::import(new ArabImport, storage_path('app\public\arab\\'. $nama_file));

		// alihkan halaman kembali
		return redirect('/nilai/arab');
	}

    public function export_excel()
	{
		return Excel::download(new ArabExport, 'arab.xlsx');
	}
}
