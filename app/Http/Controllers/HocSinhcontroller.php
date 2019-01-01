<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\HocSinh;
class HocSinhcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $hocsinh = Hocsinh::all();
        return view('hocsinh.list',compact('hocsinh'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('hocsinh.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $hocsinh = new HocSinh;
        $hocsinh->hoten = $request->txtHoTen;
        $hocsinh->toan = $request->txtToan;
        $hocsinh->ly = $request->txtLy;
        $hocsinh->hoa = $request->txtHoa;
        if ($hocsinh->save()){
            return redirect()->route('hocsinh.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $hocsinh = HocSinh::find($id);
        return view('hocsinh.edit',compact('hocsinh'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $hocsinh = HocSinh::find($id);
        $hocsinh->hoten = $request->txtHoTen;
        $hocsinh->toan = $request->txtToan;
        $hocsinh->ly = $request->txtLy;
        $hocsinh->hoa = $request->txtHoa;
        $hocsinh->save();
        return redirect()->route('hocsinh.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $hocsinh = HocSinh::find($id);
        $hocsinh->delete();
        return redirect()->route('hocsinh.index');
    }
}
