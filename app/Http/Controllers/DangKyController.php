<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MonhocRequest;
use App\Http\Controllers\Controller;
use App\Monhoc;
use Validator;

class DangKyController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(MonhocRequest $request)
    {
        //
    }

    public function them (MonhocRequest $request) {
        // $v = Validator::make($request->all(),
        //     [
        //         'txtMonhoc' => 'required|unique:monhocs,monhoc',
        //         'txtGiatien' => 'required',
        //         'txtGiangvien' => 'required',
        //     ],
        //     [
        //         'txtMonhoc.required' => 'Vui long nhap ten mon hoc',
        //         'txtMonhoc.unique' => 'Ten mon hoc da ton tai'
        //     ]
        // );
        // if ($v->fails()) {
        //     return redirect()->back()->withErrors($v->errors());
        // }


        // $monhoc = new Monhoc;
        // $monhoc->monhoc = $request->txtMonhoc;
        // $monhoc->giatien = $request->txtGiatien;
        // $monhoc->giangvien = $request->txtGiangvien;
        // if ($monhoc->save()) {
        //     return redirect('form/dang-ky');
        // }

        //Get file properties
        $file = $request->file('Fimages');
        echo $file->getClientOriginalName()."<br/>";
        echo $file->getSize()."<br/>";
        echo $file->getRealPath()."<br/>";
        echo $file->getMimeType();
        if ($file->move('public/upload',$file->getClientOriginalName())) {
            echo ("Thanh cong");
        }
    }
}
