<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Surat_keluar;
use App\Models\Pegawai;
use App\Http\Requests\SuratKeluarRequest;
use App\Models\Surat_masuk;

class SuratKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Surat_keluar::all();

        return view('pages.surat_keluar.index')->with([
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

        return view('pages.surat_keluar.create')->with([
            'items' => $items
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SuratKeluarRequest $request)
    {
        $data = $request->all();

        Surat_keluar::create($data);

        return redirect()->route('suratkeluar.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Surat_keluar::findOrFail($id);
        $pegawais = Pegawai::all();

        return view('pages.surat_keluar.edit')->with([
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
    public function update(SuratKeluarRequest $request, $id)
    {
        $data = $request->all();

        $item = Surat_keluar::findOrFail($id);
        $item->update($data);

        return redirect()->route('suratkeluar.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Surat_keluar::findOrFail($id);
        $item->delete();

        return redirect()->route('suratkeluar.index');
    }
}
