<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\SiswaModel;
class SiswaController extends Controller
{
    public function index(Request $request)
    {
      if($request->has('cari'))
      {
        $siswa=SiswaModel::where('nama','LIKE','%'.$request->cari.'%')->get();
      }else{
        $siswa=SiswaModel::all();
      }
        return view('siswa/index',['siswa'=>$siswa]);
    }
    public function create(Request $request)
    {
        SiswaModel::create($request->all());
        return redirect('/siswa')->with('sucses','Data Berhasil Di Input');
    }
    public function edit($id)
    {
        $siswa = SiswaModel::find($id);
        return view('siswa/edit',['siswa'=>$siswa]);
    }
    public function update(Request $request, $id)
    {
        $siswa = SiswaModel::find($id);
        $siswa->update($request->all());
        return redirect('/siswa')->with('sucses','Data Berhasil Di Input');
    }
    public function delete($id)
    {
        $siswa = SiswaModel::find($id);
        $siswa->delete($siswa);
        return redirect('/siswa');
    }
    public function profile($id)
    {
      $siswa = SiswaModel::find($id);
      return view('siswa/profile',['siswa'=>$siswa]);
    }
}
