<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jenis_simpanan;
use Alert;
class Jenis_simpananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $jenis_simpanan = jenis_simpanan::all();
        return view ('jenissimpanan.index',compact('jenis_simpanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       
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
         $jenis_simpanan = new jenis_simpanan;
        $jenis_simpanan->jenis_simpanan = $request->jenis_simpanan;
        $jenis_simpanan->nominal = $request->nominal;
        $jenis_simpanan->save();
        Alert::success('Tambah Data','Berhasil' )->autoclose(1500);
        return redirect('jenis_simpanan');
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
        //
           $jenis_simpanan = jenis_simpanan::findOrFail($id);
        $jenis_simpanan->jenis_simpanan = $request->jenis_simpanan;
        $jenis_simpanan->nominal = $request->nominal;
        $jenis_simpanan->save();
        Alert::success('Edit Data','Berhasil' )->autoclose(1500);
        return redirect('jenis_simpanan');
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
            $jenis_simpanan=jenis_simpanan::find($id);
        jenis_simpanan::find($id)->delete();
        Alert::success('User deleted successfully')->autoclose(1500);
        return redirect('jenis_simpanan');
    
    }
}
