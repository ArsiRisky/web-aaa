<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pimpinan extends Model
{
    public function alldata(){

        return DB::table('pimpinans')->get();
    }

    public function addData($data){
        DB::table('pimpinans')->insert($data);
    }

    public function first($id){
        return DB::table('pimpinans')->where('id', $id)->first();
    }

    public function simpan($id,$data){
            DB::table('pimpinans')
                ->where('id',$id)
                ->update($data);
    }
}
