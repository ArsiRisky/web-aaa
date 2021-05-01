<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Galery extends Model
{
    public function allData(){

        return DB::table('galeries')->get();
    }

    public function addData($data){

        DB::table('galeries')->insert($data);
    }

    public function first($id){

        return DB::table('galeries')->where('id', $id)->first();
    }

    public function simpan($id, $data){

        DB::table('galeries')->where('id', $id)->update($data);
    }

    public function deleteData($id){

        DB::table('galeries')->where('id', $id)->delete();
    }
}
