<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('template/dist/css/app.min.css') }}" rel="stylesheet" type="text/css">
        <!-- custom Css-->
        <link href="{{ asset('template/dist/css/custom.min.css') }}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Nota</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-5 border border-dark rounded m-4">
                <div class="col d-flex justify-content-center">
                    <img src="{{ asset('img/logo/logodecakrakost.jpg') }}" alt="" width="300px">
                </div>
                <h3 class="text-center">Jl Tukad Balian No 55, HP. 081 338 779 300</h3>
                <h3 class="text-center">081 238 230 26 - Denpasar</h3>
                <h4 class="text-start">Nota Pembayaran No: {{ $data->kodeNota }}</h4>
                <div class="row">
                    <div class="col-lg-1 border border-dark d-flex justify-content-center align-items-center">
                        <h4 class="text-start">1</h4>
                    </div>
                    <div class="col-lg-11 border border-dark">
                        <h4 class="text-start">Nomor Kamar : {{ $data->kamar->noKamar }}</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-1 border border-dark d-flex justify-content-center align-items-center">
                        <h4 class="text-start">2</h4>
                    </div>
                    <div class="col-lg-11 border border-dark">
                        <h4 class="text-start">Nama Yang Kost : {{ $data->penghuni->nama }}</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-1 border border-dark d-flex justify-content-center align-items-center">
                        <h4 class="text-start">3</h4>
                    </div>
                    <div class="col-lg-11 border border-dark">
                        <h4 class="text-start">Tanggal Sewa : {{ $data->pembayaran->waktuMasuk }} / {{ $data->pembayaran->jatuhTempo }}</h4>
                    </div>
                </div>
               <div class="row">
                <div class="col-lg-1 border border-dark border border-dark d-flex justify-content-center align-items-center">
                    <h4>4</h4>
                </div>
                <div class="col-lg-8 border border-dark">
                    <h4 class="text-start">Biaya Sewa :  </h4>
                </div>
                <div class="col-lg-3 border border-dark">
                    <h4></h4>
                </div>
               </div>
               <div class="row">
                <div class="col-lg-1 border border-dark d-flex justify-content-center align-items-center">
                    <h4></h4>
                </div>
                <div class="col-lg-8 border border-dark">
                    <h4>A. Harga Kamar</h4>
                </div>
                <div class="col-lg-3 border border-dark">
                    <h4>{{ 'Rp '.number_format($data->pembayaran->harga, 0, ',', '.') }}</h4>
                </div>
               </div>
               <div class="row">
                <div class="col-lg-1 border border-dark d-flex justify-content-center align-items-center">
                    <h4></h4>
                </div>
                <div class="col-lg-8 border border-dark">
                    <h4>B. Pemakaian Listrik {{ $data->pembayaran->kwhAkhir - $data->pembayaran->kwhAwal }} X {{ number_format(2500, 0, ',', '.') }} </h4>
                </div>
                <div class="col-lg-3 border border-dark">
                    <h4>{{ 'Rp '.number_format($data->pembayaran->listrik, 0, ',', '.') }}</h4>
                </div>
               </div>
               <div class="row">
                <div class="col-lg-1 border border-dark d-flex justify-content-center align-items-center">
                    <h4></h4>
                </div>
                <div class="col-lg-8 border border-dark">
                    <h4>C. Pemakaian Air X  </h4>
                </div>
                <div class="col-lg-3 border border-dark">
                    <h4>Rp 0</h4>
                </div>
               </div>
               <div class="row">
                <div class="col-lg-1 border border-dark d-flex justify-content-center align-items-center">
                    <h4></h4>
                </div>
                <div class="col-lg-8 border border-dark">
                    <h4>D. Abadoman Listrik  </h4>
                </div>
                <div class="col-lg-3 border border-dark">
                    <h4>Rp 0</h4>
                </div>
               </div>
               <div class="row">
                <div class="col-lg-1 border border-dark d-flex justify-content-center align-items-center">
                    <h4></h4>
                </div>
                <div class="col-lg-8 border border-dark">
                    <h4>E. Iuran Sampah  </h4>
                </div>
                <div class="col-lg-3 border border-dark">
                    <h4>{{ 'Rp '.number_format($data->pembayaran->sampah, 0, ',', '.') }}</h4>
                </div>
               </div>
               <div class="row">
                <div class="col-lg-1 border border-dark d-flex justify-content-center align-items-center">
                    <h4></h4>
                </div>
                <div class="col-lg-8 border border-dark">
                    <h4>F. Lan-lain  </h4>
                </div>
                <div class="col-lg-3 border border-dark">
                    <h4>Rp 0</h4>
                </div>
               </div>
               <div class="row">
                <div class="col-lg-1 border border-dark d-flex justify-content-center align-items-center">
                    <h4></h4>
                </div>
                <div class="col-lg-8 border border-dark">
                    <h4>Total  </h4>
                </div>
                <div class="col-lg-3 border border-dark">
                    <h4>{{ 'Rp '.number_format($data->pembayaran->total, 0, ',', '.') }}</h4>
                </div>
               </div>
               <div class="row border border-dark pt-2">
                   <div class="col-lg-6 text-center">
                    <div class="col">
                        <h4>Denpasar</h4>
                        <div class="col">
                            <h5>Penghuni,</h5>
                        </div>
                    </div>
                    <br><br><br>
                   </div>
                   <div class="col-lg-6 text-center">
                    <div class="col">
                        <h4>Denpasar</h4>
                        <div class="col">
                            <h5>Pengontrak,</h5>
                        </div>
                    </div>
                    <br><br><br>
                   </div>
                   
               </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>