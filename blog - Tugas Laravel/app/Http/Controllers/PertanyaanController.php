<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Nanya;
use Auth;

class PertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pertanyaan = Nanya::all();
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

        $nanya = new Nanya;
        $nanya->judul = $request["judul"];
        $nanya->isi = $request["isi"];
        $nanya->user_id = Auth::id();
        $nanya->save();

        return redirect('/pertanyaan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pertanyaan = Nanya::find($id);
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
        $pertanyaan = Nanya::find($id);
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
        $pertanyaan = Nanya::find($id);

        $pertanyaan->judul = $request["judul"];
        $pertanyaan->isi = $request["isi"];
        $pertanyaan->save();

        return redirect('/pertanyaan')->with('success' , 'Berhasil Update Pertanyaan Kamu!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pertanyaan = Nanya::destroy($id);
        return redirect('/pertanyaan')->with('success' , 'Pertanyaan berhasil di Hapus');
    }
}
