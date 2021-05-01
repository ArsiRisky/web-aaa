<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pimpinan;
use SweetAlert;

class PimpinanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->Pimpinan = new Pimpinan;
    }

    public function index()
    {
        $data = [
            'datapimpinan' => $this->Pimpinan->alldata()
        ];
        return view('pimpinan.pimpinan',$data);
    }

    public function add(){
        return view('pimpinan.addpimpinan');
    }

    public function insert(){
        Request()->validate([
            'nama' => 'required',
            'foto' => 'required|mimes:jpg,jpeg,png',
        ],[
            'nama.required' => 'Nama Wajib Diisi !!!',
            'foto.required' => 'Foto Wajib Diisi !!!',
            'foto.mimes' => 'Format Foto jpg, jpeg, png !!!',
        ]);

        //upload foto
        $file = Request()->foto;
        $fileName = Request()->judul.'.'.$file->extension();
        $file->move(public_path('img_pimpinan'),$fileName);

        $data = [
            'nama' => Request()->nama,
            'foto' => $fileName,
        ];

        $this->Pimpinan->addData($data);
        alert()->success('Success', 'Data Berhasil Ditambahkan');
        return redirect()->route('pimpinan');
    }

    public function edit($id){
        $data = [
            'show' => $this->Pimpinan->first($id)
        ];
        return view('pimpinan.editpimpinan',$data);
    }

    public function simpanedit($id){
        request()->validate([

            'nama' => 'required',
            'foto' => 'mimes:jpg,jpegp,png',
        ],[
            'nama.required' => 'Nama Wajib Diisi',
            'foto.mimes' => 'Hanya suppport jpg,jpeg,png',
        ]);

        if(Request()->foto == ""){
            $data = [
                'nama' => Request()->nama,
            ];

            $this->Pimpinan->simpan($id,$data);
        }else{
            $Pimpinan = $this->Pimpinan->first($id);
            if(!Request()->foto == ""){
                unlink(public_path('img_pimpinan/'.$Pimpinan->foto));
            }
            $file = Request()->foto;
            $nama_file = Request()->judul.'.'.$file->extension();
            $file->move(public_path('img_pimpinan'),$nama_file);

            $data = [
                'nama' => Request()->nama,
                'foto' => $nama_file
            ];

            $this->Pimpinan->simpan($id,$data);
        }
        alert()->success('Success', 'Data Behasil Di Edit');
        return redirect()->route('pimpinan');
    }
}