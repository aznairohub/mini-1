<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class treg extends Model
{
    use HasFactory;
    public function insert($table,$data)
    {
      DB::table($table)->insert($data); 
    }
    public function log($table,$username,$password)
    {
      return DB::table($table)->where('username',$username)->where('password',$password)->first();
    }
    public function apptr($table)
    {
      return DB::table($table)->get();
    }
    public function status($table,$data,$id)
    {
       return DB::table($table)->where('id',$id)->update($data);
    }
}
