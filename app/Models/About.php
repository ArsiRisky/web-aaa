<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class About extends Model
{
    public function alldata(){
    
        return DB::table('abouts')->get();
    }

    public function addData($data){
      DB::table('abouts')->insert($data);
    }

    public function first($id){
      return DB::table('abouts')->where('id', $id)->first();
    }

    public function simpan($id,$data){
        DB::table('abouts')
                ->where('id',$id)
                ->update($data);
    }

    public function deleteData($id){
      DB::table('abouts')->where('id', $id)->delete();
    }

}
