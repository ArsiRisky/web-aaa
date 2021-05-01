<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Achievement extends Model
{
    public function alldata(){

        return DB::table('achievments')->get();
    }

    public function addData($data){
        DB::table('achievments')->insert($data);
    }

    public function first($id){
        return DB::table('achievments')->where('id', $id)->first();
    }

    public function simpan($id,$data){
        DB::table('achievments')
                ->where('id',$id)
                ->update($data);
    }
    
}
