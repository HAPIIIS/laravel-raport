<?php

namespace App\Http\Controllers;

use App\Imports\UserImport;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.index',[
            "sub_page" => "Data User",
            "user" => User::latest()->filter(request(['search']))->orderBy('role')->paginate('10')
        ]);

    }
    public function edit(Request $request, $nisn){
        $user = User::find($nisn);
        return view('admin.index', compact('user'));
    }

    public function update(Request $request, $nisn){
        $validatedData = $request->validate([
            'name' => 'required',
            'nisn' => 'required',
            'status' => 'required'
        ]);

        if($validatedData){
            $data = User::findOrFail($nisn);
            $data->name = $request->name;
            $data->nisn = $request->nisn;
            $data->status = $request->status;
            $data->save();
        }

        return redirect('/admin/home');
    }

    public function hapus(Request $request, $id)
    {
        $data = User::where('id', $id)->first();
        if ($data != null) {
            $data->delete();
        }
        return redirect('/admin/home');
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
		$file->storeAs('/public/user',$nama_file);
 
		// import data
		Excel::import(new UserImport, storage_path('app\public\user\\'. $nama_file));

		// alihkan halaman kembali
		return redirect('/admin/home');
	}

    public function userJson($nisn) {
        $user = User::select(['name'])->find($nisn);
        if (!$user) {
            return response()->json(['error' => 'Not Found']);
        }
        return response()->json($user);
    }
}
