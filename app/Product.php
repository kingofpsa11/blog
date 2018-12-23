<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = ['id','name','cate_id'];

    public $timestamps = false;

    public function categories()
    {
        return $this->belongsTo('App\Category','cate_id');
    }
}
