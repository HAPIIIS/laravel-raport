<?php

namespace App\Http\Controllers;

use App\Imports\SBDPImport;
use App\Models\SBDP;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class SbdpController extends Controller
{
    public function show(){
        return view('admin.mapel.sbdp',[
            "sub_page" => "Nilai Seni Budaya dan Prakarya",
            "nilai_sbdp" => SBDP::latest()->filter(request(['search']))->orderBy('nama_siswa')->paginate(10)
        ]);
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'nisn' => 'required',
            'nama_siswa' => 'required',
        ]);

        $data = new SBDP();
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

        return redirect('/nilai/sbdp');
    }

    public function edit(Request $request, $id){
        $data = SBDP::find($id);
        return view('admin.mapel.sbdp',compact('data'));
    }

    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'nisn' => 'required',
            'nama_siswa' => 'required',
        ]);

        $data = SBDP::find($id);
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

        return redirect('/nilai/sbdp');

    }

    public function hapus(Request $request, $id)
    {
        $data = SBDP::where('id', $id)->first();
        if ($data != null) {
            $data->delete();
        }
        return redirect('/nilai/sbdp');
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
		$file->storeAs('/public/sbdp',$nama_file);
 
		// import data
		Excel::import(new SBDPImport, storage_path('app\public\sbdp\\'. $nama_file));

		// alihkan halaman kembali
		return redirect('/nilai/sbdp');
	}
}
