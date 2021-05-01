<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class product extends Model
{
    public function alldata(){

        return DB::table('products')->get();
    }

    public function addData($data){
        DB::table('products')->insert($data);
    }

    public function first($id){
        return DB::table('products')->where('id', $id)->first();
    }

    public function simpan($id, $data){
        DB::table('products')->where('id',$id)->update($data);
    }

     public function deleteData($id){
        DB::table('products')->where('id',$id)->delete();
    }
}
