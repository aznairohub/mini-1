<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class note extends Model
{
    use HasFactory;
    public function insert($table,$data)
    {
        DB::table($table)->insert($data);
    }
    public function selectn($table)
    {
        return DB::table($table)->get();
    }
}
