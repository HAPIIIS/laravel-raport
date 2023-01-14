<?php

namespace App\Http\Controllers;

use App\Models\Matematika;
use Illuminate\Http\Request;

class MatematikaController extends Controller
{
    public function show(){
        return view('admin.mtk',[
            "sub_page" => "Nilai Matematika",
            "nilai_mtk" => Matematika::latest()->paginate(10)
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
        return view('admin.mtk',compact('data'));
    }

    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'nama_uploader' => 'required',
            'nama_file' => 'required',
        ]);

        $data = Matematika::find($id);
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

    public function hapus(Request $request, $id)
    {
        $data = Matematika::where('id', $id)->first();
        if ($data != null) {
            $data->delete();
        }
        return redirect('/nilai/matematika');
    }
}
