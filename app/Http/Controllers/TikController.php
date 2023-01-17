<?php

namespace App\Http\Controllers;

use App\Imports\TikImport;
use App\Models\TIK;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class TikController extends Controller
{
    public function show(){
        return view('admin.mapel.tik',[
            "sub_page" => "Nilai Teknologi Informasi dan Komunikasi",
            "nilai_tik" => TIK::latest()->filter(request(['search']))->orderBy('nama_siswa')->paginate(10)
        ]);
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'nisn' => 'required',
            'nama_siswa' => 'required',
        ]);

        $data = new TIK();
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

        return redirect('/nilai/tik');
    }

    public function edit(Request $request, $id){
        $data = TIK::find($id);
        return view('admin.mapel.tik',compact('data'));
    }

    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'nisn' => 'required',
            'nama_siswa' => 'required',
        ]);

        $data = TIK::find($id);
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

        return redirect('/nilai/tik');

    }

    public function hapus(Request $request, $id)
    {
        $data = TIK::where('id', $id)->first();
        if ($data != null) {
            $data->delete();
        }
        return redirect('/nilai/tik');
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
		$file->storeAs('/public/tik',$nama_file);
 
		// import data
		Excel::import(new TikImport, storage_path('app\public\tik\\'. $nama_file));

		// alihkan halaman kembali
		return redirect('/nilai/tik');
	}
}
