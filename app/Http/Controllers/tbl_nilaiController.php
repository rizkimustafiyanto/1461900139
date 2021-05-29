<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class tbl_nilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Mengambil data dari table tbl_nilai
        $tbl_nilai = DB::table('tbl_nilai')
        ->leftjoin('data_siswa', 'tbl_nilai.id_siswa', '=', 'data_siswa.id_siswa')
        ->leftjoin('data_guru', 'tbl_nilai.id_guru', '=', 'data_guru.id_guru')
        ->leftjoin('setup_pelajaran', 'tbl_nilai.id_pelajaran', '=', 'setup_pelajaran.id_pelajaran')
        ->leftjoin('setup_kelas', 'tbl_nilai.id_kelas', '=', 'setup_kelas.id_kelas')
        ->orderBy('nama_siswa', 'asc')
        ->get();
        //Mengirim data ke view tblnilai
        return view('tblnilai' , ['tbl_nilai' => $tbl_nilai]);
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
