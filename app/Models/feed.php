<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class feed extends Model
{
    use HasFactory;
    public function infeed($table,$data)
    {
        DB::table($table)->insert($data); 
    }
    public function selectf($table)
    {
        return DB::table($table)->get();
    }
    public function viewf($table)
    {
        return DB::table($table)->get();
    }
}
