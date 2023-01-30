<?php

namespace App\Http\Controllers;

use App\Exports\TahfidzExport;
use App\Imports\TahfidzImport;
use App\Models\Tahfidz;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class TahfidzController extends Controller
{
    public function show(){
        return view('admin.mapel.tahfidz',[
            "sub_page" => "Nilai Tahfidz dan Tahsin",
            "nilai_tahfidz" => Tahfidz::latest()->filter(request(['search']))->orderBy('nama_siswa')->paginate(10)
        ]);
    }

    public function export_excel()
	{
		return Excel::download(new TahfidzExport, 'tahfidz.xlsx');
	}

    public function store(Request $request){
        $validatedData = $request->validate([
            'nisn' => 'required',
            'nama_siswa' => 'required',
        ]);

        $data = new Tahfidz();
        $data->nisn = $request->nisn;
        $data->nama_siswa = $request->nama_siswa;
        $data->kelas = $request->kelas;
        $data->sin_jan = $request->sin_jan;
        $data->fiz_jan = $request->fiz_jan;
        $data->sin_feb = $request->sin_feb;
        $data->fiz_feb = $request->fiz_feb;
        $data->sin_mar = $request->sin_mar;
        $data->fiz_mar = $request->fiz_mar;
        $data->sin_apr = $request->sin_apr;
        $data->fiz_apr = $request->fiz_apr;
        $data->sin_mei = $request->sin_mei;
        $data->fiz_mei = $request->fiz_mei;
        $data->sin_jun = $request->sin_jun;
        $data->fiz_jun = $request->fiz_jun;
        $data->save();

        return redirect('/nilai/tahfidz');
    }

    public function edit(Request $request, $id){
        $data = Tahfidz::find($id);
        return view('admin.mapel.tahfidz',compact('data'));
    }

    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'nisn' => 'required',
            'nama_siswa' => 'required',
        ]);

        $data = Tahfidz::find($id);
        $data->nisn = $request->input('nisn', $data->nisn);
        $data->nama_siswa = $request->input('nama_siswa', $data->nama_siswa);
        $data->kelas = $request->input('kelas', $data->kelas);
        $data->sin_jan = $request->input('sin_jan', $data->sin_jan);
        $data->fiz_jan = $request->input('fiz_jan', $data->fiz_jan);
        $data->sin_feb = $request->input('sin_feb', $data->sin_feb);
        $data->fiz_feb = $request->input('fiz_feb', $data->fiz_feb);
        $data->sin_mar = $request->input('sin_mar', $data->sin_mar);
        $data->fiz_mar = $request->input('fiz_mar', $data->fiz_mar);
        $data->sin_apr = $request->input('sin_apr', $data->sin_apr);
        $data->fiz_apr = $request->input('fiz_apr', $data->fiz_apr);
        $data->sin_mei = $request->input('sin_mei', $data->sin_mei);
        $data->fiz_mei = $request->input('fiz_mei', $data->fiz_mei);
        $data->sin_jun = $request->input('sin_jun', $data->sin_jun);
        $data->fiz_jun = $request->input('fiz_jun', $data->fiz_jun);
        $data->save();

        return redirect('/nilai/tahfidz');

    }

    public function hapus(Request $request, $id)
    {
        $data = Tahfidz::where('id', $id)->first();
        if ($data != null) {
            $data->delete();
        }
        return redirect('/nilai/tahfidz');
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
		$file->storeAs('/public/tahfidz',$nama_file);
 
		// import data
		Excel::import(new TahfidzImport, storage_path('app\public\tahfidz\\'. $nama_file));

		// alihkan halaman kembali
		return redirect('/nilai/tahfidz');
	}
}
