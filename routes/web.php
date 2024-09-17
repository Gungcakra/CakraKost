<?php

use App\Http\Controllers\JatuhTempoController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\KamarIsiController;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PenghuniController;
use App\Models\KamarIsi;
use App\Models\Penghuni;
use Illuminate\Support\Facades\Route;


// ADMIN ROUTE
Route::get('/', function () {
    return view('index',[
        'title' =>'Cakra Kost'
    ]);
});


// KAMAR
Route::get('/adminkamar',[KamarController::class,'index'])->name('admin.indexkamar');
Route::post('/storekamar',[KamarController::class, 'storekamar'])->name('storekamar');
Route::get('/deletekamar/{idKamar}',[KamarController::class, 'deletekamar'])->name('deletekamar');
Route::post('/updatekamar/{idKamar}',[KamarController::class, 'updatekamar'])->name('updatekamar');


// PENGHUNI
Route::get('/adminpenghuni',[PenghuniController::class, 'index'])->name('admin.indexpenghuni');
Route::post('/storepenghuni',[PenghuniController::class,'storepenghuni'])->name('storepenghuni');
Route::get('/deletepenghuni/{idPenghuni}',[PenghuniController::class, 'deletepenghuni'])->name('deletepenghuni');
Route::post('/updatepenghuni/{idPenghuni}',[PenghuniController::class, 'updatepenghuni'])->name('updatepenghuni');

// Manajemen Kamar
Route::get('/manajemenkamar',[KamarIsiController::class,'index'])->name('adminmanajemenkamar');
Route::post('/storemanajemenkamar',[KamarIsiController::class,'storemanajemenkamar'])->name('storemanajemenkamar');
Route::get('/deletemanajemenkamar/{idManajemenKamar}',[KamarIsiController::class,'deletemanajemenkamar'])->name('deletemanajemenkamar');
Route::post('/updatemanajemenkamar/{idManajemenKamar}',[KamarIsiController::class,'updatemanajemenkamar'])->name('updatemanajemenkamar');



//Jatuh tempo 
Route::get('/manajemenjatuhtempo',[JatuhTempoController::class,'index'])->name('admin.indexmanajemenjatuhtempo');
Route::get('/storetagihan/{idJatuhtempo}',[JatuhTempoController::class,'storetagihan'])->name('admin.storetaguhan');

//PEMBAYARAN
Route::get('/adminpembayaran',[PembayaranController::class,'index'])->name('indexpembayaran');
Route::get('/cetaknota/{idPembayaran}',[PembayaranController::class,'cetaknota'])->name('cetaknotapembayaran');
Route::get('/nota',[NotaController::class,'index'])->name('indexnota');
Route::get('/setbayar/{idPembayaran}',[NotaController::class,'setbayar'])->name('indexnota');
Route::post('/updatepembayaran/{idPembayaran}',[PembayaranController::class,'updatepembayaran'])->name('updatepembayaran');
//SCAN BARCODE
Route::get('/scanbarcodekamarisi', function(){
    return view('admin.scanbarcode',[
        'title' => 'Scan Barcode'
    ]);
});