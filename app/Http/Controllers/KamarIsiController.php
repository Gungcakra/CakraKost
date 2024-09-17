<?php

namespace App\Http\Controllers;

use App\Models\KamarIsi;
use App\Http\Requests\StoreKamarIsiRequest;
use App\Http\Requests\UpdateKamarIsiRequest;
use App\Models\JatuhTempo;
use App\Models\Kamar;
use App\Models\Nota;
use App\Models\Pembayaran;
use App\Models\Penghuni;
use Carbon\Carbon;
use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Milon\Barcode\DNS1D;
use Milon\Barcode\Facades\DNS1DFacade;

class KamarIsiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    // Mendapatkan semua kamar isi
    // $kamarisi = KamarIsi::all();

    // // Memeriksa setiap kamar isi untuk pengecekan jatuh tempo
    // foreach ($kamarisi as $kamarIsi) {

    // $jatuhTempoString = $kamarIsi->jatuhTempo;

    // // Membuat objek DateTime dari string dengan format yang sesuai
    // $jatuhTempo = Carbon::createFromFormat('Y-m-d H:i:s', $jatuhTempoString);

    // // Setel zona waktu ke 'Asia/Jakarta'
    // $jatuhTempo->setTimezone('Asia/Makassar');
    //   $existingJatuhTempo = JatuhTempo::where('idKamar', $kamarIsi->idKamar)
    //                                 ->where('idPenghuni', $kamarIsi->idPenghuni)
    //                                 ->first();
    //     // Jika sudah lewat jatuh tempo
    //     if ($jatuhTempo < now() || $jatuhTempo == now() ) {

    //         JatuhTempo::updateOrCreate(
    //             [
    //                 'idKamar' => $kamarIsi->idKamar,
    //                 'idPenghuni' => $kamarIsi->idPenghuni,
    //             ],
    //             [
    //                 'harga' => $kamarIsi->harga,
    //                 'status' => $kamarIsi->status,
    //                 'kwhAwal' => $kamarIsi->kwhAwal,
    //                 'kwhAkhir' => $kamarIsi->kwhAkhir,
    //                 'waktuMasuk' => $kamarIsi->waktuMasuk,
    //                 'jatuhTempo' => $kamarIsi->jatuhTempo,
    //                 'waktuKeluar' => $kamarIsi->waktuKeluar, 
    //                 // Tambahkan kolom lain yang perlu disalin ke tabel jatuh_tempo
    //             ]
    //         );
    
    //     }
    // }

    // Kembalikan tampilan dengan data yang diperlukan
    return view('admin.manajemenkamar', [
        'title' => 'Manajemen Kamar',
        'data' => KamarIsi::with(['kamar', 'penghuni'])->where('status', 'Menghuni')->get(),
        'dataKamar' => Kamar::where('status', 'Kosong')->get(),
        'dataPenghuni' => Penghuni::orderBy('created_at', 'desc')->get(),
      // Mengirim data kamar isi yang sudah lewat jatuh tempo ke tampilan
    ]);
}



    /**
     * Show the form for creating a new resource.
     */
    public function storemanajemenkamar(Request $request)
    {
  
        $data = new KamarIsi();
        //Harga
        $idKamar = $request->input('idKamar');
        $harga = Kamar::where('id',$idKamar)->value('hargaKamar');
       
        
        //status
        $status = 'Menghuni';
      
        $tanggalMasuk = Carbon::parse($request->input('waktuMasuk'));
 
        $jatuhTempo = $tanggalMasuk->addMonths(1);
        $data->fill($request->all());
        $data->harga = $harga;
        $data->status = $status;
        $data->jatuhTempo = $jatuhTempo;
        $data->save();

        //Update status kamar
        Kamar::where('id',$idKamar)->update(['status' => 'Isi']);

        return redirect()->route('adminmanajemenkamar')->with('storeManajemenKamar','Data Kamar Isi Berhasil DiTambah');
    }

    public function deletemanajemenkamar($idManajemenkamar){
        $data = KamarIsi::find($idManajemenkamar);
        $idKamar = $data->idKamar;
        $idPenghuni = $data->idPenghuni;
        $data->status = 'Keluar';
        $data->waktuKeluar = now();
        $data->save();
        $dataKamar = new Kamar();
        $dataKamar->where('id',$idKamar)->update(['status' => 'Kosong']);
        $dataJatuhTempo = JatuhTempo::where('idKamar',$idKamar)->where('idPenghuni',$idPenghuni);
        $dataJatuhTempo->delete();
        $dataPembayaran = Pembayaran::where('idKamar',$idKamar)->where('idPenghuni',$idPenghuni);
        $idPembayaran = $dataPembayaran->id;
        $dataNota = Nota::where('idPembayaran',$idPembayaran);
        $dataNota->delete();
        $dataPembayaran->delete();
        return redirect()->route('adminmanajemenkamar')->with('deleteManajemenKamar','Data Kamar Isi Berhasil Dikeluarkan');
        
    }

    public function updatemanajemenkamar(Request $request, $idManajemenkamar){
        $data = KamarIsi::find($idManajemenkamar);
        $data->update($request->all());
        $data->save();

        return redirect()->route('adminmanajemenkamar')->with('updateManajemenKamar','Data Kamar Isi Berhasil DiUbah');

    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKamarIsiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(KamarIsi $kamarIsi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KamarIsi $kamarIsi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKamarIsiRequest $request, KamarIsi $kamarIsi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KamarIsi $kamarIsi)
    {
        //
    }
}
