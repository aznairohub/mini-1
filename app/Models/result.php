<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class result extends Model
{
    use HasFactory;
    public function insert($table,$data)
    {
        DB::table($table)->insert($data);
    }
    public function selectr($table,$id)
    {
        return DB::table($table)->where('id',$id)->get();
    }
    public function appr($table)
    {
        return DB::table($table)->get();
    }
    public function status($table,$data,$id)
    {
       return DB::table($table)->where('id',$id)->update($data);
    }
}
