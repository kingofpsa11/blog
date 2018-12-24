<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    //
    protected $table = 'cars';

    protected $fillable = ['id','name','price'];

    public function colors () {
        return $this->belongsToMany('App\Color','car_colors');
    }
}
