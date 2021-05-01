<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Header extends Model
{
    public function alldata(){
        return DB::table('headers')->get();
    }

    public function first($id){
        return DB::table('headers')->where('id', $id)->first();
    }

    public function simpan($id,$data){
        DB::table('headers')
              ->where('id', $id)
              ->update($data);
    }

    public function addData($data){
        DB::table('headers')->insert($data);
    }
}
