<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'categories';

    protected $fillable = ['name','alias','order','parent_id','keywords','description'];

    public $timestamps = false;

    public function product(){
        return $this->hasMany('App/Product');
    }
}
