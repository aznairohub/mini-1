<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class timetable extends Model
{
    use HasFactory;
    public function insert($table,$data)
    {
        DB::table($table)->insert($data);
    }
    public function selectT($table)
    {
        return DB::table($table)->get();
    }
    public function appt($table)
    {
        return DB::table($table)->get();
    }
    public function status($table,$data,$id)
    {
       return DB::table($table)->where('id',$id)->update($data);
    }
}
