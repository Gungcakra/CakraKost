<?php

namespace App\Http\Controllers;

use App\Models\Penghuni;
use App\Http\Requests\StorePenghuniRequest;
use App\Http\Requests\UpdatePenghuniRequest;
use Illuminate\Http\Request;

class PenghuniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin/datapenghuni',[
            'title' => 'Data Penghuni',
            'data'=> Penghuni::all(),


        ]);
    }

    public function storepenghuni(Request $request)
    {
        $data = Penghuni::create($request->all());

        if($request->has('fotoKtp')){
            $request->file('fotoKtp')->move('img/fotoKtp/', $request->file('fotoKtp')->getClientOriginalName());
            $data->fotoKtp = $request->file('fotoKtp')->getClientOriginalName();
        }
        $data->save();
        return redirect()->route('admin.indexpenghuni')->with('storePenghuni','Data Penghuni Berhasil DiTambah');

    }

    public function deletepenghuni($idPenghuni)
    {
        $data = Penghuni::find($idPenghuni);
        $data->delete();
        return redirect()->route('admin.indexpenghuni')->with('deletePenghuni','Data Penghuni Berhasil DiHapus');

    }
    public function updatepenghuni(Request $request, $idPenghuni)
    {
        $data = Penghuni::find($idPenghuni);
        $data->update($request->all());
        return redirect()->route('admin.indexpenghuni')->with('updatePenghuni','Data Penghuni Berhasil DiUbah');

    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePenghuniRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Penghuni $penghuni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penghuni $penghuni)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePenghuniRequest $request, Penghuni $penghuni)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penghuni $penghuni)
    {
        //
    }
}
