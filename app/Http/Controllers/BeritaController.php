<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use SweetAlert;

class BeritaController extends Controller
{
       public function __construct()
    {
        $this->middleware('auth');
        $this->Berita  = new Berita;
    }

    public function index()
    {
        $data = [
            'databerita' => $this->Berita->alldata()
        ];
        return view('berita.berita',$data);
    }

    public function add(){
        return view('berita.addberita');
    }

    public function insert(){
        Request()->validate([
            'judul' => 'required',
            'penjelasan' => 'required',
            'foto' => 'required|mimes:jpg,jpeg,png',
            'waktu' => 'required'
        ],[
            'judul.required' => 'Judul Wajib Diisi !!!',
            'penjelasan.required' => 'Penjelasan Wajib Diisi !!!',
            'foto.required' => 'Foto Wajib Diisi !!!',
            'foto.mimes' => 'Format Foto jpg, jpeg, & png !!!',
            'waktu.requred' => 'Waktu Tidak Boleh Kosong!!!'
        ]);

        // Upload Foto
        $file = Request()->foto;
        $fileName = Request()->judul.'.'.$file->extension();
        $file->move(public_path('img_berita'),$fileName);

        $data = [
            'judul' => Request()->judul,
            'penjelasan' => Request()->penjelasan,
            'foto' => $fileName,
            'waktu' => Request()->waktu,
            
        ];

        $this->Berita->addData($data);
        alert()->success('Success', 'Data Berhasil Ditambahkan');
        return Redirect()->route('berita');
    }

    public function edit($id){
        $data = [
            'show' => $this->Berita->first($id)
        ];
        return view('berita.editberita',$data);
    }

    public function simpanedit($id){
        request()->validate([

            'judul' => 'required',
            'penjelasan' => 'required',
            'foto' => 'mimes:jpg,png,jpeg',

        ],[
            'judul.required' => 'Judul wajib diisi',
            'penjelasan.required' => 'Judul wajib diisi',
            'foto.mimes' => 'Hanya support jpg,png,jpeg',
        ]);

        if(Request()->foto == ""){
            $data = [
                'judul' => Request()->judul,
                'penjelasan' => Request()->penjelasan,
            ];

            alert()->success('Success', 'Data Berhasil Diedit');
            $this->Berita->simpan($id,$data);
        }else{

            $Berita = $this->Berita->first($id);
            if(!Request()->foto == ""){
            unlink(public_path('img_berita/'.$Berita->foto));
            }

            $file = Request()->foto;
            $nama_file = Request()->judul.'.'.$file->extension();
            $file->move(public_path('img_berita'),$nama_file);

            $data = [
                'judul' => Request()->judul,
                'penjelasan' => Request()->penjelasan,
                'foto' => $nama_file,
                'waktu' => Request()->Waktu,
            ];
            
            alert()->success('Success', 'Data Berhasil Diedit');
            $this->Berita->simpan($id,$data);
        }
            alert()->success('Success', 'Data Berhasil Di Edit');
            return redirect()->route('berita');
    }

    public function delete($id){

        $berita=$this->Berita->first($id);
        if($berita->foto <> ""){
            unlink(public_path('img_berita/'.$berita->foto));
        }
        $this->Berita->deleteData($id);
        alert()->success('Success', 'Data Berhasil Dihapus');
        return redirect()->route('berita');
    }
}
