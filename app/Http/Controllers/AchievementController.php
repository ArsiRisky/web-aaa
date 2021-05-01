<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Achievement;
use SweetAlert;

class AchievementController extends Controller
{
       public function __construct()
    {
        $this->middleware('auth');
        $this->Achievement = new Achievement;
    }

    public function index()
    {
        $data = [
            'dataachievement' => $this->Achievement->alldata()
        ];
        return view('achievement.achievement',$data);
    }

    public function add(){
        return view('achievement.addachievement');
    }

    public function insert(){
        Request()->validate([
            'judul' => 'required',
            'penjelasan' => 'required',
            'foto' => 'required|mimes:jpg,jpeg,png',
        ],[
            'judul.required' => 'Judul Wajib Diisi !!!',
            'penjelasan.required' => 'Penjelasan Wajib Diisi !!!',
            'foto.required' => 'Foto Wajib Diisi !!!',
            'foto.mimes' => 'Format Foto jpg, jpeg, png !!!',
        ]);

        //upload foto
        $file = Request()->foto;
        $fileName = Request()->judul.'.'.$file->extension();
        $file->move(public_path('img_achievement'),$fileName);
        
        $data = [
            'judul' => Request()->judul,
            'penjelasan' => Request()->penjelasan,
            'foto' => $fileName,
        ];

        $this->Achievement->addData($data);
        alert()->success('Success', 'Data Berhasil Ditambahkan');
        return redirect()->route('achievement');
    }

    public function edit($id){
        $data = [
            'show' => $this->Achievement->first($id)
        ];
        return view('achievement.editachievement',$data);
    }

    public function simpanedit($id){
        request()->validate([

            'judul' => 'required',
            'penjelasan' => 'required',
            'foto' => 'mimes:jpg,jpeg,png',

        ],[
            'judul.required' => 'Judul Wajib Diisi',
            'penjelasan.required' => 'Penjelasan Wajib Diisi',
            'foto.mimes' => 'Hanya support jpg,jpeg,png',
        ]);

        if(Request()->foto == ""){
            $data = [
                'judul' => Request()->judul,
                'penjelasan' => Request()->penjelasan,
            ];

            $this->Achievement->simpan($id,$data);
        }else{
            $Achievement = $this->Achievement->first($id);
            if(!Request()->foto == ""){
                unlink(public_path('img_achievement/'.$Achievement->foto));
            }
            $file = Request()->foto;
            $nama_file = Request()->judul.'.'.$file->extension();
            $file->move(public_path('img_achievement'),$nama_file);

            $data = [
                'judul' => Request()->judul,
                'penjelasan' => Request()->penjelasan,
                'foto' => $nama_file
            ];

            $this->Achievement->simpan($id,$data);
        }
            alert()->success('Success', 'Data Berhasil Di Edit');
            return redirect()->route('achievement');
    }
}
