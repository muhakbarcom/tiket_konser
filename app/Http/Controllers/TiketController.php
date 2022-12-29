<?php

namespace App\Http\Controllers;

use App\Models\tiket;
use App\Http\Requests\StoretiketRequest;
use App\Http\Requests\UpdatetiketRequest;
use GuzzleHttp\Psr7\Request;

class TiketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Tiket::all();
        return view('tiket.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Tiket;
        return view('tiket.create', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Tiket;
        $model->nama_lengkap = $request->nama_lengkap;
        $model->konser_id = $request->konser_id;
        $model->alamat = $request->alamat;
        $model->nomor_hp = $request->nomor_hp;
        $model->tiket_id = $request->tiket_id;
        $model->tanggal = $request->tanggal;
        $model->save();

        return redirect('/tiket');
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
        $model = Tiket::find($id);

        return view('tiket.edit', compact('model'));
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
        $model = Tiket::find($id);
        $model->nama_lengkap = $request->nama_lengkap;
        $model->konser_id = $request->konser_id;
        $model->alamat = $request->alamat;
        $model->nomor_hp = $request->nomor_hp;
        $model->tiket_id = $request->tiket_id;
        $model->tanggal = $request->tanggal;
        $model->save();

        return redirect('/tiket');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Tiket::find($id);
        $model->delete();
        return redirect('tiket');
    }
}
