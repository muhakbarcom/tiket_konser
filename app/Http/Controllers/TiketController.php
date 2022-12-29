<?php

namespace App\Http\Controllers;

use App\Models\tiket;
use App\Http\Requests\StoretiketRequest;
use App\Http\Requests\UpdatetiketRequest;
use App\Models\konser;
// use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request;

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

    // pesan
    public function pesan($id_konser)
    {
        $data_konser = konser::get_by_id($id_konser);
        return view('tiket.create', compact('data_konser'));
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
        $model->tiket_id = substr(md5(microtime()), rand(0, 26), 10);
        $model->tanggal = date('Y-m-d');
        $model->save();

        $insertedId = $model->id;

        return redirect('/tiket/tiket_anda/' . $insertedId);
    }

    public function tiket_anda($id_tiket)
    {
        $tiket = Tiket::find($id_tiket);
        $konser = Konser::find($tiket->konser_id);
        return view('tiket.detail', compact(['tiket', 'konser']));
    }

    public function check_in()
    {
        return view('tiket.check_in');
    }

    public function check_in_act(Request $request)
    {
        $tiket = Tiket::where('tiket_id', $request->nomor_tiket)->first();

        $model = Tiket::find($tiket->id);
        $model->is_check_in = 1;
        $model->save();

        return redirect('/tiket/check_in')->with('success', 'Tiket berhasil checkin');
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
