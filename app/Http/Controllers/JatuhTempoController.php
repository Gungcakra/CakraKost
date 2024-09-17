<?php

namespace App\Http\Controllers;

use App\Models\JatuhTempo;
use App\Http\Requests\StoreJatuhTempoRequest;
use App\Http\Requests\UpdateJatuhTempoRequest;
use App\Models\Kamar;
use App\Models\KamarIsi;
use App\Models\Pembayaran;
use App\Models\Penghuni;
use Carbon\Carbon;

class JatuhTempoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $kamarisi = KamarIsi::all();

    // Memeriksa setiap kamar isi untuk pengecekan jatuh tempo
    foreach ($kamarisi as $kamarIsi) {

    $jatuhTempoString = $kamarIsi->jatuhTempo;

    // Membuat objek DateTime dari string dengan format yang sesuai
    $jatuhTempo = Carbon::createFromFormat('Y-m-d H:i:s', $jatuhTempoString);

    // Setel zona waktu ke 'Asia/Jakarta'
    $jatuhTempo->setTimezone('Asia/Makassar');
      $existingJatuhTempo = JatuhTempo::where('idKamar', $kamarIsi->idKamar)
                                    ->where('idPenghuni', $kamarIsi->idPenghuni)
                                    ->first();
        // Jika sudah lewat jatuh tempo
        if ($jatuhTempo < now() || $jatuhTempo == now() ) {

            JatuhTempo::updateOrCreate(
                [
                    'idKamar' => $kamarIsi->idKamar,
                    'idPenghuni' => $kamarIsi->idPenghuni,
                ],
                [
                    'harga' => $kamarIsi->harga,
                    'status' => $kamarIsi->status,
                    'kwhAwal' => $kamarIsi->kwhAwal,
                    'kwhAkhir' => $kamarIsi->kwhAkhir,
                    'waktuMasuk' => $kamarIsi->waktuMasuk,
                    'jatuhTempo' => $kamarIsi->jatuhTempo,
                    'waktuKeluar' => $kamarIsi->waktuKeluar, 
                    // Tambahkan kolom lain yang perlu disalin ke tabel jatuh_tempo
                ]
            );
    
        }
    }
    return view('admin.jatuhtempo',[
        'title' => 'Manajemen Jatuh Tempo',
        'data' => JatuhTempo::with(['kamar', 'penghuni'])->where('status', 'Menghuni')->get(),
        'dataKamar' => Kamar::where('status', 'Kosong')->get(),
        'dataPenghuni' => Penghuni::orderBy('created_at', 'desc')->get(),
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function storetagihan($idJatuhtempo)
    {
        $dataJatuhTempo = JatuhTempo::find($idJatuhtempo);
        $dataPembayaran = new Pembayaran();

        if($dataJatuhTempo->kwhAkhir == null){
            return redirect()->route('admin.indexmanajemenjatuhtempo');
        }else{

            $hargaListrik = ($dataJatuhTempo->kwhAkhir - $dataJatuhTempo->kwhAwal) * 2500;
            $sampah = 10000;
            $totalHarga = $dataJatuhTempo->harga + $hargaListrik + $sampah;
            $status = 'Belum Bayar';
            $dataPembayaran->updateOrCreate([
                'idKamar'=>$dataJatuhTempo->idKamar,
                'idPenghuni' => $dataJatuhTempo->idPenghuni
            ],
            [
                'harga'=>$dataJatuhTempo->harga,
                'kwhAwal'=>$dataJatuhTempo->kwhAwal,
                'kwhAkhir'=>$dataJatuhTempo->kwhAkhir,
                'listrik'=>$hargaListrik,
                'sampah'=>$sampah,
                'total'=>$totalHarga,
                'waktuMasuk'=>$dataJatuhTempo->waktuMasuk,
                'jatuhTempo'=>$dataJatuhTempo->jatuhTempo,
                'status'=>$status,
                'tanggalBayar'=>Carbon::now(),
            ]);
        }

        return redirect()->route('admin.indexmanajemenjatuhtempo');
         
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJatuhTempoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(JatuhTempo $jatuhTempo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JatuhTempo $jatuhTempo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJatuhTempoRequest $request, JatuhTempo $jatuhTempo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JatuhTempo $jatuhTempo)
    {
        //
    }
}
