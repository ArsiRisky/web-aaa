<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use SweetAlert;

class AboutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->About = new About;
    }

    public function index()
    {
        $data = [
            'dataabout' => $this->About->allData()
        ];
        return view('about_us.about',$data);
    }

    public function add(){
        return view('about_us.addabout');
    }

    public function insert(){
        Request()->validate([
            'title' => 'required',
            'deskripsi' => 'required',
            'foto' => 'required|mimes:jpg,jpeg,png',
        ],[
            'title.required' => 'Title Wajib Diisi !!!',
            'deskripsi.required' => 'Deskripsi Wajib Diisi !!!',
            'foto.required' => 'Foto Wajib Diisi !!!',
            'foto.mimes' => 'Format Foto jpg, jpeg, png',
        ]);

        //upload foto
        $file =  Request()->foto;
        $fileName = Request()->judul.'.'.$file->extension();
        $file->move(public_path('foto'),$fileName);

        $data = [
            'title' => Request()->title,
            'deskripsi' => Request()->deskripsi,
            'foto' => $fileName,
        ];

        $this->About->addData($data);
        alert()->success('Success', 'Data Berhasil Ditambahkan');
        return redirect()->route('about');
    }

    public function edit($id){
        $data = [
            'show' => $this->About->first($id)
        ];
        return view('about_us.editabout',$data);
    }

    public function simpanedit($id){
        request()->validate([
            'title' => 'required',
            'deskripsi' => 'required',
            'foto' => 'mimes:jpg,jpeg,png',
        ],[
            'title.required' => 'Title Wajib Diisi',
            'deskripsi.required' => 'Deskripsi Wajib Diisi',
            'foto.mimes' => 'Hanya support jpg,jpeg,png',
        ]);

        if(Request()->foto == ""){
            $data = [
                'title' => Request()->title,
                'deskripsi' => Request()->deskripsi,
            ];

            $this->About->simpan($id,$data);
        }else{
            $About = $this->About->first($id);
            if(!Request()->foto == ""){
                unlink(public_path('foto/'.$About->foto));
            }
            $file = Request()->foto;
            $nama_file = Request()->judul.'.'.$file->extension();
            $file->move(public_path('foto'),$nama_file);

            $data = [
                'title' => Request()->title,
                'deskripsi' => Request()->deskripsi,
                'foto' => $nama_file
            ];
            
            $this->About->simpan($id,$data);
        }
            alert()->success('Success', 'Data Berhasil Di Edit');
            return redirect()->route('about');
    }

    public function delete($id){

        $about=$this->About->first($id);
        if($about->foto <> ""){
            unlink(public_path('foto/'.$about->foto));
        }
        $this->About->deleteData($id);
        alert()->error('Success', 'Data Berhasil Di Hapus');
        return redirect()->route('about');
    }
}
