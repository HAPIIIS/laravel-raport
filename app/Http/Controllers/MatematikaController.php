<?php

namespace App\Http\Controllers;

use App\Exports\MatematikaExport;
use App\Imports\MatematikaImport;
use App\Models\Matematika;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class MatematikaController extends Controller
{
    public function show(){
        return view('admin.mapel.mtk',[
            "sub_page" => "Nilai Matematika",
            "nilai_mtk" => Matematika::latest()->filter(request(['search']))->orderBy('nama_siswa')->paginate(10)
        ]);
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'nisn' => 'required',
            'nama_siswa' => 'required',
        ]);

        $data = new Matematika();
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

        return redirect('/nilai/matematika');
    }

    public function edit(Request $request, $id){
        $data = Matematika::find($id);
        return view('admin.mapel.mtk',compact('data'));
    }

    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'nisn' => 'required',
            'nama_siswa' => 'required',
        ]);
        
        $data = Matematika::find($id);
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

        return redirect('/nilai/matematika');

    }

    public function hapus(Request $request, $id)
    {
        $data = Matematika::where('id', $id)->first();
        if ($data != null) {
            $data->delete();
        }
        return redirect('/nilai/matematika');
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
		$file->storeAs('/public/matematika',$nama_file);
 
		// import data
		Excel::import(new MatematikaImport, storage_path('app\public\matematika\\'. $nama_file));

		// alihkan halaman kembali
		return redirect('/nilai/matematika');
	}

    public function export_excel()
	{
		return Excel::download(new MatematikaExport, 'matematika.xlsx');
	}
}
