<?php

namespace App\Http\Controllers;

use App\Models\IPS;
use App\Imports\IpsImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class IpsController extends Controller
{
    public function show(){
        return view('admin.mapel.ips',[
            "sub_page" => "Nilai Ilmu Pengetahuan Sosial",
            "nilai_ips" => IPS::latest()->filter(request(['search']))->orderBy('nama_siswa')->paginate(10)
        ]);
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'nisn' => 'required',
            'nama_siswa' => 'required',
        ]);

        $data = new IPS();
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

        return redirect('/nilai/ips');
    }

    public function edit(Request $request, $id){
        $data = ips::find($id);
        return view('admin.mapel.ips',compact('data'));
    }

    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'nisn' => 'required',
            'nama_siswa' => 'required',
        ]);

        $data = IPS::find($id);
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

        return redirect('/nilai/ips');

    }

    public function hapus(Request $request, $id)
    {
        $data = IPS::where('id', $id)->first();
        if ($data != null) {
            $data->delete();
        }
        return redirect('/nilai/ips');
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
		$file->storeAs('/public/ips',$nama_file);
 
		// import data
		Excel::import(new IpsImport, storage_path('app\public\ips\\'. $nama_file));

		// alihkan halaman kembali
		return redirect('/nilai/ips');
	}
}
