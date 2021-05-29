<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class tbl_jadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Mengambil data dari table tbl_jadwal
        $tbl_jadwal = DB::table('tbl_jadwal')
        ->leftjoin('data_guru', 'tbl_jadwal.id_guru', '=', 'data_guru.id_guru')
        ->leftjoin('setup_pelajaran', 'tbl_jadwal.id_pelajaran', '=', 'setup_pelajaran.id_pelajaran')
        ->leftjoin('setup_kelas', 'tbl_jadwal.id_kelas', '=', 'setup_kelas.id_kelas')
        ->get();
        //Mengirim data ke view datasiswa
        return view('tbljadwal' , ['tbl_jadwal' => $tbl_jadwal]);
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
    }
}
