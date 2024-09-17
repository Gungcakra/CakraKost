<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Http\Requests\StoreKamarRequest;
use App\Http\Requests\UpdateKamarRequest;
use Illuminate\Http\Request;


class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin/datakamar',
                    [   'title' => 'Data Kamar',
                        'data'=>Kamar::all()]
    );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function storekamar(Request $request)
    {
        $data = Kamar::create($request->all());
        $data->save();
        return redirect()->route('admin.indexkamar')->with('storekamar','Data Kamar Berhasil Ditambah');
    }

    public function deletekamar($idKamar){
        $data = Kamar::find($idKamar);
        $data->delete();
        return redirect()->route('admin.indexkamar')->with('deletekamar','Data Kamar Berhasil Dihapus');;
        
    }

    public function updatekamar(Request $request, $idKamar){
        $data = Kamar::find($idKamar);
        $data->update($request->all());
        return redirect()->route('admin.indexkamar')->with('updatekamar','Data Kamar Berhasil Diubah');;

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKamarRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Kamar $kamar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kamar $kamar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKamarRequest $request, Kamar $kamar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kamar $kamar)
    {
        //
    }
}
