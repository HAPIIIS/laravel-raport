<?php

namespace App\Http\Controllers;

use App\Imports\HadisImport;
use App\Models\Hadis;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class HadisController extends Controller
{
    public function show(){
        return view('admin.mapel.hadis',[
            "sub_page" => "Nilai Hadis dan Do'a",
            "nilai_hadis" => Hadis::latest()->filter(request(['search']))->orderBy('nama_siswa')->paginate(10)
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'nisn' => 'required',
            'nama_siswa' => 'required',
        ]);

        $data = new Hadis();
        $data->nisn = $request->nisn;
        $data->nama_siswa = $request->nama_siswa;
        $data->kelas = $request->kelas;
        $data->d1 = $request->d1;
        $data->d2 = $request->d2;
        $data->d3 = $request->d3;
        $data->d4 = $request->d4;
        $data->d5 = $request->d5;
        $data->d6 = $request->d6;
        $data->h1 = $request->h1;
        $data->h2 = $request->h2;
        $data->h3 = $request->h3;
        $data->h4 = $request->h4;
        $data->h5 = $request->h5;
        $data->h6 = $request->h6;
        $data->save();

        return redirect('/nilai/hadis');
    }

    public function edit(Request $request, $id){
        $data = Hadis::find($id);
        return view('admin.mapel.hadis',compact('data'));
    }

    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'nisn' => 'required',
            'nama_siswa' => 'required',
        ]);

        $data = Hadis::find($id);
        $data->nisn = $request->input('nisn', $data->nisn);
        $data->nama_siswa = $request->input('nama_siswa', $data->nama_siswa);
        $data->kelas = $request->input('kelas', $data->kelas);
        $data->d1 = $request->input('d1', $data->d1);
        $data->d2 = $request->input('d2', $data->d2);
        $data->d3 = $request->input('d3', $data->d3);
        $data->d4 = $request->input('d4', $data->d4);
        $data->d5 = $request->input('d5', $data->d5);
        $data->d6 = $request->input('d6', $data->d6);
        $data->h1 = $request->input('h1', $data->h1);
        $data->h2 = $request->input('h2', $data->h2);
        $data->h3 = $request->input('h3', $data->h3);
        $data->h4 = $request->input('h4', $data->h4);
        $data->h5 = $request->input('h5', $data->h5);
        $data->h6 = $request->input('h6', $data->h6);
        $data->save();

        return redirect('/nilai/hadis');

    }

    public function hapus(Request $request, $id)
    {
        $data = Hadis::where('id', $id)->first();
        if ($data != null) {
            $data->delete();
        }
        return redirect('/nilai/hadis');
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
		$file->storeAs('/public/hadis',$nama_file);
 
		// import data
		Excel::import(new HadisImport, storage_path('app\public\hadis\\'. $nama_file));

		// alihkan halaman kembali
		return redirect('/nilai/hadis');
	}
}
