<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class streg extends Model
{
    use HasFactory;
    public function insert($table,$data)
    {
        DB::table($table)->insert($data); 
    }
    public function logData($table,$username,$password)
    {
        return DB::table($table)->where('username',$username)->where('password',$password)->first();
    }
}
