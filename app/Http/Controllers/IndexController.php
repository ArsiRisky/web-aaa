<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Achievement;
use App\Models\About;
use App\Models\Berita;
use App\Models\Header;
use App\Models\Pimpinan;
use App\Models\product;
use App\Models\visimisi;
use App\Models\Galery;

class IndexController extends Controller
{
    public function __construct()
    {
        $this->Achievement = new Achievement();
        $this->About = new About();
        $this->Berita = new Berita();
        $this->Header = new Header();
        $this->Pimpinan = new Pimpinan();
        $this->product = new product();
        $this->visimisi = new visimisi();
        $this->Galery = new Galery();
    }

    public function index(){
        $data =[
            'achievement' => $this->Achievement->alldata(),
            'about'      => $this->About->alldata(),
            'berita'     => $this->Berita->alldata(),
            'header'     => $this->Header->alldata(),
            'pimpinan'   => $this->Pimpinan->alldata(),
            'product'    => $this->product->alldata(),
            'visimisi'   => $this->visimisi->alldata(),
            'galeri'     => $this->Galery->allData(),

        ];
        return view('index',$data);
    }
}
