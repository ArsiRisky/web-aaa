<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\visimisi;
use SweetAlert;

class VisimisiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->Visimisi=new Visimisi;
    }

    public function index()
    {
        $data = [
            'datavisimisi' => $this->Visimisi->alldata()
        ];

        return view('visimisi.visimisi',$data);
    }

    public function add(){
        return view('visimisi.addvisimisi');
    }

    public function insert(){
        request()->validate([

            'visi' => 'required',
            'misi' => 'required'
        ],[
            'visi.required' => 'wajib diisi',
            'misi.required' => 'wajib diisi'
        ]);

        $data = [
            'visi' => Request()->visi,
            'misi' => Request()->misi
        ];

        $this->Visimisi->addData($data);
        alert()->success('Success', 'Data Berhasil Ditambahkan');
        return redirect()->route('visimisi');
    }

    public function edit($id){
        $data = [
            'show' => $this->Visimisi->first($id)
        ];
        return view('visimisi.editvisimisi',$data);
    }

    public function simpanedit($id){
        request()->validate([

            'visi' => 'required',
            'misi' => 'required'
        ],[
            'visi.required' => 'Wajib Diisi',
            'misi.required' => 'Wajib Diisi'
        ]);

        $data = [
            'visi' => request()->visi,
            'misi' => request()->misi
        ];

        $this->Visimisi->simpan($id,$data);
        alert()->success('Success', 'Data Berhasil Di Edit');
        return redirect()->route('visimisi');
    }
        
}
