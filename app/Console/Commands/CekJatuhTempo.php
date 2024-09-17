<?php

namespace App\Console\Commands;

use App\Models\JatuhTempo;
use App\Models\KamarIsi;
use Illuminate\Console\Command;

class CekJatuhTempo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:cek-jatuh-tempo';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Memeriksa Kamar Yang Jatuh Tempo';

    /**
     * Execute the console command.
     */

     public function __construct()
     {
         parent::__construct();
     }
 
    public function handle()
    {
        $kamarIsiJatuhTempo = KamarIsi::where('jatuhTempo', '>=', now())->get();
        foreach ($kamarIsiJatuhTempo as $kamarIsi) {
            JatuhTempo::create([
                'idKamar' => $kamarIsi->idKamar,
                'idPenghuni' => $kamarIsi->idPenghuni,
                'harga' => $kamarIsi->harga,
                'status' => $kamarIsi->status,
                'kwhAwal' => $kamarIsi->kwhAwal,
                'kwhAkhir' => $kamarIsi->kwhAkhir,
                'jatuhTempo' => $kamarIsi->jatuhTempo,
                'waktuKeluar' => $kamarIsi->idPenghuni,
                // Tambahkan kolom lain yang perlu disalin ke tabel jatuh_tempo
            ]);

           
        }

        $this->info('Pemeriksaan jatuh tempo selesai.');
    }
}
