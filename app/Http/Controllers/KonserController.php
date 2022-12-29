<?php

namespace App\Http\Controllers;

use App\Models\konser;
// use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request;

class KonserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Konser::all();
        return view('Konser.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Konser;
        return view('Konser.create', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Konser;
        $model->nama_konser = $request->nama_konser;
        $model->tanggal = $request->tanggal;
        $model->save();

        return redirect('/konser');
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
        $model = Konser::find($id);

        return view('konser.edit', compact('model'));
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
        $model = Konser::find($id);
        $model->nama_konser = $request->nama_konser;
        $model->tanggal = $request->tanggal;
        $model->save();

        return redirect('/konser');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Konser::find($id);
        $model->delete();
        return redirect('konser');
    }
}
