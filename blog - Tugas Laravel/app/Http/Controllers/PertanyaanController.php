<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pertanyaan = DB::table('pertanyaan')->get();
        return view('forum.data' , ['pertanyaan'=>$pertanyaan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forum.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        DB::table('pertanyaan')->insert([
            "judul"=>$request["judul"] , 
            "isi"=>$request["isi"]
        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pertanyaan = DB::table('pertanyaan')->where('id',$id)->first();
        return view('forum.show' , compact('pertanyaan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pertanyaan = DB::table('pertanyaan')->where('id',$id)->first();
        return view('forum.edit' , compact('pertanyaan'));
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
        $pertanyaan = DB::table('pertanyaan')
                            ->where('id' , $id)
                            ->update([
                                'judul'=>$request['judul'],
                                'isi'=>$request['isi']
                            ]);
        return redirect('/')->with('success' , 'Berhasil Update Pertanyaan Kamu!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $query = DB::table('pertanyaan')->where('id' , $id)->delete();
        return redirect('/')->with('success' , 'Pertanyaan berhasil di Hapus');
    }
}
