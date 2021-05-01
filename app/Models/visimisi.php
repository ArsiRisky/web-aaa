<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class visimisi extends Model
{
    public function alldata(){

        return DB::table('visimisis')->get();
    }

    public function addData($data){
        DB::table('visimisis')->insert($data);
    }

    public function first($id){
        return DB::table('visimisis')->where('id', $id)->first();
    }

    public function simpan($id,$data){
        DB::table('visimisis')
                ->where('id',$id)
                ->update($data);
    }
}
