<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Http\Requests\StorePembayaranRequest;
use App\Http\Requests\UpdatePembayaranRequest;
use App\Models\Nota;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pembayaran::all();

        return view('admin.pembayaran',[
            'title' => 'Manajemen Pembayaran',
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function cetaknota($idPembayaran){
        $idUpdate = decryptId($idPembayaran);
        $idPembayaran = $idUpdate;
        $data = Pembayaran::find($idUpdate);
        $nota = new Nota();

        $kodeNota = $idUpdate . $idUpdate . $data->idKamar . $data->idPenghuni;
      
       $nota->updateOrCreate(
        [
            'idPembayaran'=>$idUpdate,
            'idKamar'=>$data->idKamar,
            'idPenghuni'=>$data->idPenghuni
        ],
        [
            'kodeNota'=>$kodeNota,
            'status' =>$data->status
       ]);

       $dataNota = $nota->with(['pembayaran','kamar','penghuni'])->where('idPembayaran',$idPembayaran)->first();
        return view('admin.nota',[
            'title' => 'Nota',
            'data' => $dataNota
        ],compact('dataNota'));
    }

    public function setbayar($idPembayaran){
        $idUpdate = decryptId($idPembayaran);
        $data = Pembayaran::find($idUpdate);
        $status = 'Sudah Bayar';
        $data->update(['status' => $status]);

        return redirect()->route('indexpembayaran');

    }

    public function updatepembayaran(Request $request, $idPembayaran){
        $data = Pembayaran::find($idPembayaran);
        $hargaLain = $request->input('lain');
        $ketLain = $request->input('ketLain');

     
        $data->update(['lain'=>$hargaLain,'ketLain'=>$ketLain]);

        return redirect()->route('indexpembayaran')->with('updatePembayaran','Data Pembayaran Berhasil DiUpdate');
    }

    /**
     * Store a newly created resource in storage.   
     */
    public function store(StorePembayaranRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pembayaran $pembayaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pembayaran $pembayaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePembayaranRequest $request, Pembayaran $pembayaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pembayaran $pembayaran)
    {
        //
    }
}
