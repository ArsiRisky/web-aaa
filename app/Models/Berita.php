<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Berita extends Model
{
    public function alldata(){

        return DB::table('beritas')->get();
    }

    public function addData($data){
        DB::table('beritas')->insert($data);
    }

    public function first($id){
        return DB::table('beritas')->where('id', $id)->first();
    }

    public function simpan($id,$data){
        DB::table('beritas')
                ->where('id',$id)
                ->update($data);
    }

    public function deleteData($id){
        DB::table('beritas')->where('id',$id)->delete();
    }
}
