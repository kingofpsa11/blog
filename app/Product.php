<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = ['name','alias','price','into','content','image','keywords','descripion','user_id','cate_id'];

    public $timestamps = false;

    public function category(){
        return $this->belongTo('App\Category');
    }

    public function user(){
        return $this->belongTo('App\User');
    }

    public function image(){
        return $this->hasMany('App\ProductImages');
    }
}
