<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Galery;
use SweetAlert;

class GaleriController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->Galery = new Galery;
    }

    public function index()
    {
        $data = [
            'datagaleri' => $this->Galery->allData()
        ];
        return view('galeri.galeri',$data);
    }

    public function add(){
        return view('galeri.addgaleri');
    }

    public function insert(){
        Request()->validate([
            'foto_1' => 'mimes:jpg,jpeg,png',
            'foto_2' => 'mimes:jpg,jpeg,png',
            'foto_3' => 'mimes:jpg,jpeg,png',
            'foto_4' => 'mimes:jpg,jpeg,png',
            'foto_5' => 'mimes:jpg,jpeg,png',
            'foto_6' => 'mimes:jpg,jpeg,png',
            'foto_7' => 'mimes:jpg,jpeg,png',
            'foto_8' => 'mimes:jpg,jpeg,png',
        ],[
            'foto_1.mimes' => 'Format Foto Hanya jpg, jpeg, png',
            'foto_2.mimes' => 'Format Foto Hanya jpg, jpeg, png',
            'foto_3.mimes' => 'Format Foto Hanya jpg, jpeg, png',
            'foto_4.mimes' => 'Format Foto Hanya jpg, jpeg, png',
            'foto_5.mimes' => 'Format Foto Hanya jpg, jpeg, png',
            'foto_6.mimes' => 'Format Foto Hanya jpg, jpeg, png',
            'foto_7.mimes' => 'Format Foto Hanya jpg, jpeg, png',
            'foto_8.mimes' => 'Format Foto Hanya jpg, jpeg, png',
        ]);

        $file1 = Request()->foto_1;
        $fileName1 = Str::random(10).'.'.$file1->extension();
        $file1->move(public_path('img_galery'),$fileName1);

        $file2 = Request()->foto_2;
        $fileName2 = Str::random(10).'.'.$file2->extension();
        $file2->move(public_path('img_galery'),$fileName2);

        $file3 = Request()->foto_3;
        $fileName3 = Str::random(10).'.'.$file3->extension();
        $file3->move(public_path('img_galery'),$fileName3);

        $file4 = Request()->foto_4;
        $fileName4 = Str::random(10).'.'.$file4->extension();
        $file4->move(public_path('img_galery'),$fileName4);

        $file5 = Request()->foto_5;
        $fileName5 = Str::random(10).'.'.$file5->extension();
        $file5->move(public_path('img_galery'),$fileName5);

        $file6 = Request()->foto_6;
        $fileName6 = Str::random(10).'.'.$file6->extension();
        $file6->move(public_path('img_galery'),$fileName6);

        $file7 = Request()->foto_7;
        $fileName7 = Str::random(10).'.'.$file7->extension();
        $file7->move(public_path('img_galery'),$fileName7);

        $file8 = Request()->foto_8;
        $fileName8 = Str::random(10).'.'.$file8->extension();
        $file8->move(public_path('img_galery'),$fileName8);

        $data = [
            'foto_1' => $fileName1,
            'foto_2' => $fileName2,
            'foto_3' => $fileName3,
            'foto_4' => $fileName4,
            'foto_5' => $fileName5,
            'foto_6' => $fileName6,
            'foto_7' => $fileName7,
            'foto_8' => $fileName8,
        ];
        
        $this->Galery->addData($data);
        alert()->success('Success', 'Data Berhasil Ditambahkan');
        return redirect()->route('galeri');
    }

    public function edit($id){
        $data = [
            'show' => $this->Galery->first($id)
        ];

        return view('galeri.editgaleri',$data);
    }

    public function simpanedit($id){
        Request()->validate([
            'foto_1' => 'mimes:jpg,jpeg,png',
            'foto_2' => 'mimes:jpg,jpeg,png',
            'foto_3' => 'mimes:jpg,jpeg,png',
            'foto_4' => 'mimes:jpg,jpeg,png',
            'foto_5' => 'mimes:jpg,jpeg,png',
            'foto_6' => 'mimes:jpg,jpeg,png',
            'foto_7' => 'mimes:jpg,jpeg,png',
            'foto_8' => 'mimes:jpg,jpeg,png',
        ],[
            'foto_1.mimes' => 'Format Foto Hanya jpg, jpeg, png',
            'foto_2.mimes' => 'Format Foto Hanya jpg, jpeg, png',
            'foto_3.mimes' => 'Format Foto Hanya jpg, jpeg, png',
            'foto_4.mimes' => 'Format Foto Hanya jpg, jpeg, png',
            'foto_5.mimes' => 'Format Foto Hanya jpg, jpeg, png',
            'foto_6.mimes' => 'Format Foto Hanya jpg, jpeg, png',
            'foto_7.mimes' => 'Format Foto Hanya jpg, jpeg, png',
            'foto_8.mimes' => 'Format Foto Hanya jpg, jpeg, png',
        ]);

        if( !Request()->foto_1 && !Request()->foto_2 && !Request()->foto_3 && !Request()->foto_4 && !Request()->foto_5  && !Request()->foto_6 && !Request()->foto_7 && !Request()->foto_8){
            $this->Galery->simpan($id);
            alert()->success('Success', 'Data Berhasil Di Edit');
            return redirect()->route('galeri');
        }

        else {

            $Galeri = $this->Galery->first($id);

            if(Request()->foto_1 != ""){
                unlink(public_path('img_galery/'.$Galeri->foto_1));
            }


            if(Request()->foto_1){
                $file1 = Request()->foto_1;
                $fileName1 = Str::random(10).'.'.$file1->extension();
                $file1->move(public_path('img_galery/'),$fileName1);

                $data = [
                    'foto_1' => $fileName1
                ];
                alert()->success('Success', 'Data Behasil Di Edit');
                $this->Galery->simpan($id, $data);
            }

            if(Request()->foto_2 != ""){
                unlink(public_path('img_galery/'.$Galeri->foto_2));
            }


            if(Request()->foto_2){
                $file2 = Request()->foto_2;
                $fileName2 = Str::random(10).'.'.$file2->extension();
                $file2->move(public_path('img_galery'),$fileName2);

                $data = [
                    'foto_2' => $fileName2
                ];
                alert()->success('Success', 'Data Berhasil Di Edit');
                $this->Galery->simpan($id, $data);
            }

            if(Request()->foto_3 != ""){
                unlink(public_path('img_galery/'.$Galeri->foto_3));
            }


            if(Request()->foto_3){
                $file3 = Request()->foto_3;
                $fileName3 = Str::random(10).'.'.$file3->extension();
                $file3->move(public_path('img_galery'),$fileName3);

                $data = [
                    'foto_3' => $fileName3
                ];
                alert()->success('Success', 'Data Berhasil Di Edit');
                $this->Galery->simpan($id, $data);
            }

            if(Request()->foto_4 != ""){
                unlink(public_path('img_galery/'.$Galeri->foto_4));
            }


            if(Request()->foto_4){
                $file4 = Request()->foto_4;
                $fileName4 = Str::random(10).'.'.$file4->extension();
                $file4->move(public_path('img_galery'),$fileName4);

                $data = [
                    'foto_4' => $fileName4
                ];
                alert()->success('Success', 'Data Berhasil Di Edit');
                $this->Galery->simpan($id, $data);
            }

            if(Request()->foto_5 != ""){
                unlink(public_path('img_galery/'.$Galeri->foto_5));
            }


            if(Request()->foto_5){
                $file5 = Request()->foto_5;
                $fileName5 = Str::random(10).'.'.$file5->extension();
                $file5->move(public_path('img_galery'),$fileName5);

                $data = [
                    'foto_5' => $fileName5
                ];

                $this->Galery->simpan($id, $data);
            }

            if(Request()->foto_6 != ""){
                unlink(public_path('img_galery/'.$Galeri->foto_6));
            }


            if(Request()->foto_6){
                $file6 = Request()->foto_6;
                $fileName6 = Str::random(10).'.'.$file6->extension();
                $file6->move(public_path('img_galery'),$fileName6);

                $data = [
                    'foto_6' => $fileName6
                ];
                alert()->success('Success', 'Data Berhasil Di Edit');
                $this->Galery->simpan($id, $data);
            }

            if(Request()->foto_7 != ""){
                unlink(public_path('img_galery/'.$Galeri->foto_7));
            }


            if(Request()->foto_7){
                $file7 = Request()->foto_7;
                $fileName7 = Str::random(10).'.'.$file7->extension();
                $file7->move(public_path('img_galery'),$fileName7);

                $data = [
                    'foto_7' => $fileName7
                ];
                alert()->success('Success', 'Data Berhasil Di Edit');
                $this->Galery->simpan($id, $data);
            }

            if(Request()->foto_8 != ""){
                unlink(public_path('img_galery/'.$Galeri->foto_8));
            }


            if(Request()->foto_8){
                $file8 = Request()->foto_8;
                $fileName8 = Str::random(10).'.'.$file8->extension();
                $file8->move(public_path('img_galery'),$fileName8);

                $data = [
                    'foto_8' => $fileName8
                ];
                alert()->success('Success', 'Data Berhasil Di Edit');
                $this->Galery->simpan($id, $data);
            }

            return redirect()->route('galeri');
        }
    }

    public function delete($id){
        
        $galeri = $this->Galery->first($id);
        if($galeri->foto_1 <> ""){
        unlink(public_path('img_galery/'.$galeri->foto_1));
        }

        $galeri = $this->Galery->first($id);
        if($galeri->foto_2 <> ""){
        unlink(public_path('img_galery/'.$galeri->foto_2));
        }

        $galeri = $this->Galery->first($id);
        if($galeri->foto_3 <> ""){
        unlink(public_path('img_galery/'.$galeri->foto_3));
        }

        $galeri = $this->Galery->first($id);
        if($galeri->foto_4 <> ""){
        unlink(public_path('img_galery/'.$galeri->foto_4));
        }

        $galeri = $this->Galery->first($id);
        if($galeri->foto_5 <> ""){
        unlink(public_path('img_galery/'.$galeri->foto_5));
        }

        $galeri = $this->Galery->first($id);
        if($galeri->foto_6 <> ""){
        unlink(public_path('img_galery/'.$galeri->foto_6));
        }

        $galeri = $this->Galery->first($id);
        if($galeri->foto_7 <> ""){
        unlink(public_path('img_galery/'.$galeri->foto_7));
        }

        $galeri = $this->Galery->first($id);
        if($galeri->foto_8 <> ""){
        unlink(public_path('img_galery/'.$galeri->foto_8));
        }
        $this->Galery->deleteData($id);
        alert()->error('Success', 'Data Berhasil Di Hapus');
        return redirect()->route('galeri');
        }
}
