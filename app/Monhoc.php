<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Monhoc extends Model
{
    //
    protected $table = 'monhocs';

    protected $fillable = ['id','monhoc','giatien','giangvien'];

    public $timestamps = false;
}
