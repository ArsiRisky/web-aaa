<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Header;
use SweetAlert;

class HeaderController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
        $this->Header=new Header;
    }

    public function index()
    {
        $data = [
            'dataheader' => $this->Header->alldata()
        ];

        return view('header.header',$data);
    }

    public function add(){
        return view('header.addheader');
    }

    public function insert(){
         request()->validate([

            'title' => 'required',
            'deskripsi' => 'required',
            'foto' => 'required|mimes:jpg,png,jpeg',
            'logo' => 'required|mimes:png',

        ],[
            'title.required' => 'Judul wajib diisi',
            'deskripsi.required' => 'deskripsi wajib diisi',
            'foto.required' => "wajib diisi",
            'foto.mimes' => 'Hanya support jpg,png,jpeg',
            'foto.required' => "wajib diisi",
            'logo.mimes' => 'Hanya support png',
        ]);

        // Upload foto
        $filelogo = Request()->logo;
        $fileNamelogo = "logo".'.'.$filelogo->extension();
        $filelogo->move(public_path('img_header'),$fileNamelogo);

        $filefoto = Request()->foto;
        $fileNamefoto = Request()->judul.'.'.$filefoto->extension();
        $filefoto->move(public_path('img_header'),$fileNamefoto);

        $data = [
            'title' => Request()->title,
            'deskripsi' => Request()->deskripsi,
            'logo' => $fileNamelogo,
            'foto' => $fileNamefoto,
        ];

        alert()->success('Success', 'Data Berhasil Ditambahkan');
        $this->Header->addData($data);
        return redirect()->route('header');
    }

    public function edit($id){
        $data = [
            'show' => $this->Header->first($id)
        ];
        return view('header.editheader',$data);
    }

    public function simpanedit($id){
        request()->validate([

            'judul' => 'required',
            'deskripsi' => 'required',
            'foto' => 'mimes:jpg,png,jpeg',

        ],[
            'judul.required' => 'Judul wajib diisi',
            'deskripsi.required' => 'Judul wajib diisi',
            'foto.mimes' => 'Hanya support jpg,png,jpeg',
        ]);
        
        if(Request()->foto == ""){
            $data = [
                'title' => Request()->judul,
                'deskripsi' => Request()->deskripsi,
            ];

            alert()->success('Success', 'Data Berhasil Diedit');
            $this->Header->simpan($id,$data);
        }else{
            $file = Request()->foto;
            $nama_file = Request()->judul.'.'.$file->extension();
            $file->move(public_path('img_header'),$nama_file);

            $data = [
                'title' => Request()->judul,
                'deskripsi' => Request()->deskripsi,
                'foto' => $nama_file
            ];

            alert()->success('Success', 'Data Berhasil Diedit');
            $this->Header->simpan($id,$data);
        }

        return redirect()->route('header');
    }
}
