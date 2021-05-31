<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Surat_masuk;
use App\Http\Requests\SuratMasukRequest;
use App\Models\Pegawai;

class SuratMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Surat_masuk::all();

        return view('pages.surat_masuk.index')->with([
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Pegawai::all();

        return view('pages.surat_masuk.create')->with([
            'items' => $items
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SuratMasukRequest $request)
    {
        $data = $request->all();

        Surat_masuk::create($data);

        return redirect()->route('suratmasuk.index');
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
        $item = Surat_masuk::findOrFail($id);
        $pegawais = Pegawai::all();

        return view('pages.surat_masuk.edit')->with([
            'item' => $item,
            'pegawais' => $pegawais
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SuratMasukRequest $request, $id)
    {
        $data = $request->all();

        $item = Surat_masuk::findOrFail($id);
        $item->update($data);

        return redirect()->route('suratmasuk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Surat_masuk::findOrFail($id);
        $item->delete();

        return redirect()->route('suratmasuk.index');
    }
}
