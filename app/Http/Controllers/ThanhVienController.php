<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ThanhVienRequest;
use App\ThanhVien;

class ThanhVienController extends Controller
{
    //
    public function getLogin () {
        return view('auth.index');
    }

    public function postLogin (ThanhVienRequest $request) {
        $auth = ['user' => 'admin','pass' => '123456'];
    }
}

