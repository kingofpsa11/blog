<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function test(){
        echo 'Day la controller';
    }

    public function chuyenHuong(){
        return redirect()->route('dinhdanh');
    }
}
