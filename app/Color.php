<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    //
    protected $table = 'colors';

    protected $fillable = ['id','name'];

    public function cars () {
        return $this->belongsToMany('App\Car','car_colors');
    }
}
