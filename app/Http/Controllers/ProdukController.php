<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Str;
use SweetAlert;

class ProdukController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->product=new product;
    }

    public function index()
    {
        $data = [
            'dataproduct' => $this->product->alldata()
        ];
        return view('produk.produk',$data);
    }

    public function add(){
        return view('produk.addproduk');
    }

    public function insert(){
        Request()->validate([
            'jenis' => 'required|unique:products',
            'penjelasan' => 'required',
            'lebar' => 'required',
            'panjang' => 'required',
            'tebal' => 'required',
            'kayu' => 'required',
            'foto_1' => 'mimes:jpg,jpeg,png',
            'foto_2' => 'mimes:jpg,jpeg,png',
            'foto_3' => 'mimes:jpg,jpeg,png',
        ],[
            'jenis.required' => 'Jenis Wajib Diisi!!',
            'jenis.unique' => 'Jenis Tersebut Sudah Ada!!',
            'penjelasan.required' => 'Penjelasan Wajib Diisi',
            'lebar.required' => 'lebar Wajib Diisi',
            'panjang.required' => 'panjang Wajib Diisi',
            'tebal.required' => 'tebal Wajib Diisi',
            'kayu.required' => 'kayu Wajib Diisi',
            'foto_1.mimes' => 'Format Foto Hanya jpg, jpeg, & png',
            'foto_2.mimes' => 'Format Foto Hanya jpg, jpeg, & png',
            'foto_3.mimes' => 'Format Foto Hanya jpg, jpeg, & png',
        ]);

        $file1 = Request()->foto_1;
        $fileName1 = Str::random(10).'.'.$file1->extension();
        $file1->move(public_path('img_product'),$fileName1);

        $file2 = Request()->foto_2;
        $fileName2 = Str::random(10).'.'.$file2->extension();
        $file2->move(public_path('img_product'),$fileName2);

        $file3 = Request()->foto_3;
        $fileName3 = Str::random(10).'.'.$file3->extension();
        $file3->move(public_path('img_product'),$fileName3);

        $data = [
            'jenis' => Request()->jenis,
            'penjelasan' => Request()->penjelasan,
            'lebar' => Request()->lebar,
            'panjang' => Request()->panjang,
            'tebal' => Request()->tebal,
            'kayu' => Request()->kayu,
            'foto_1' => $fileName1,
            'foto_2' => $fileName2,
            'foto_3' => $fileName3,
        ];

        $this->product->addData($data);
        alert()->success('Success', 'Data Berhasil Ditambahkan');
        return Redirect()->route('produk');
    }

    public function edit($id){
        $data =[
            'show' => $this->product->first($id)
        ];

        return view('produk.editproduk',$data);
    }

    public function simpanedit($id){
        Request()->validate([
            'jenis' => 'required',
            'penjelasan' => 'required',
            'lebar' => 'required',
            'panjang' => 'required',
            'tebal' => 'required',
            'kayu' => 'required',
            'foto_1' => 'mimes:jpg,jpeg,png',
            'foto_2' => 'mimes:jpg,jpeg,png',
            'foto_3' => 'mimes:jpg,jpeg,png',
        ],[
            'jenis.required' => 'Jenis Wajib Diisi!!',
            'penjelasan.required' => 'Penjelasan Wajib Diisi',
            'lebar.required' => 'lebar Wajib Diisi',
            'panjang.required' => 'panjang Wajib Diisi',
            'tebal.required' => 'tebal Wajib Diisi',
            'kayu.required' => 'kayu Wajib Diisi',
            'foto_1.mimes' => 'Format Foto Hanya jpg, jpeg, & png',
            'foto_2.mimes' => 'Format Foto Hanya jpg, jpeg, & png',
            'foto_3.mimes' => 'Format Foto Hanya jpg, jpeg, & png',
        ]);

        if( !Request()->foto_1 && !Request()->foto_2 && !Request()->foto_3){
            $data = [
                'jenis' => Request()->jenis,
                'penjelasan' => Request()->penjelasan,
                'lebar' => Request()->lebar,
                'panjang' => Request()->panjang,
                'tebal' => Request()->tebal,
                'kayu' => Request()->kayu,
            ];
            $this->product->simpan($id, $data);
            alert()->success('Success', 'Data Berhasil Di Edit');
            return redirect()->route('produk');
        }

        else {

            $produk = $this->product->first($id);

            if(Request()->foto_1 != ""){
                unlink(public_path('img_product/'.$produk->foto_1));
            }


            if(Request()->foto_1){
                $file1 = Request()->foto_1;
                $fileName1 = Str::random(10).'.'.$file1->extension();
                $file1->move(public_path('img_product'),$fileName1);

                $data = [
                    'jenis' => Request()->jenis,
                    'penjelasan' => Request()->penjelasan,
                    'lebar' => Request()->lebar,
                    'panjang' => Request()->panjang,
                    'tebal' => Request()->tebal,
                    'kayu' => Request()->kayu,
                    'foto_1' => $fileName1
                ];
                alert()->success('Success', 'Data Berhasil Di Edit');
                $this->product->simpan($id, $data);
            }

            if(Request()->foto_2 != ""){
                unlink(public_path('img_product/'.$produk->foto_2));
            }


            if(Request()->foto_2){
                $file2 = Request()->foto_2;
                $fileName2 = Str::random(10).'.'.$file2->extension();
                $file2->move(public_path('img_product'),$fileName2);

                $data = [
                    'jenis' => Request()->jenis,
                    'penjelasan' => Request()->penjelasan,
                    'lebar' => Request()->lebar,
                    'panjang' => Request()->panjang,
                    'tebal' => Request()->tebal,
                    'kayu' => Request()->kayu,
                    'foto_2' => $fileName2
                ];
                alert()->success('Success', 'Data Berhasil Di Edit');
                $this->product->simpan($id, $data);
            }

            if(Request()->foto_3 != ""){
                unlink(public_path('img_product/'.$produk->foto_3));
            }


            if(Request()->foto_3){
                $file3 = Request()->foto_3;
                $fileName3 = Str::random(10).'.'.$file3->extension();
                $file3->move(public_path('img_product'),$fileName3);

                $data = [
                    'jenis' => Request()->jenis,
                    'penjelasan' => Request()->penjelasan,
                    'lebar' => Request()->lebar,
                    'panjang' => Request()->panjang,
                    'tebal' => Request()->tebal,
                    'kayu' => Request()->kayu,
                    'foto_3' => $fileName3
                ];
                alert()->success('Success', 'Data Berhasil Di Edit');
                $this->product->simpan($id, $data);
            }

            return redirect()->route('produk');

        }
    }

    public function delete($id){
        
        $product = $this->product->first($id);
        if($product->foto_1 <> ""){
        unlink(public_path('img_product/'.$product->foto_1));
        }

        $product = $this->product->first($id);
        if($product->foto_2 <> ""){
        unlink(public_path('img_product/'.$product->foto_2));
        }

        $product = $this->product->first($id);
        if($product->foto_3 <> ""){
        unlink(public_path('img_product/'.$product->foto_3));
        }

        $this->product->deleteData($id);
        alert()->error('Success', 'Data Berhasil Berhasil Di Hapus');
        return redirect()->route('produk');
        }
}
