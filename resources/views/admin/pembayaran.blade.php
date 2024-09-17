@extends('layout.admin')

@section('maincontent')
<div class="main-content">
    <div class="page-content">

        {{-- STARTS --}}
        <div class="container-fluid">
            <div class="row d-flex">
                <h1 class="text-center">{{ $title }}</h1>
             
            </div>

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="table-dark">

                        
                        <tr>
                            <th scope="col" class="align-middle">#</th>
                            <th scope="col" class="align-middle">AKSI</th>
                            <th scope="col" class="align-middle">NO KAMAR</th>
                            <th scope="col" class="align-middle">NAMA PENGHUNI</th>
                            <th scope="col" class="align-middle">HARGA</th>
                            <th scope="col" class="align-middle">KWH AWAL</th>
                            <th scope="col" class="align-middle">KWH AKHIR</th>
                            <th scope="col" class="align-middle">LISTRIK</th>
                            <th scope="col" class="align-middle">SAMPAH</th>
                            <th scope="col" class="align-middle">LAIN-LAIN</th>
                            <th scope="col" class="align-middle">TOTAL</th>
                            <th scope="col" class="align-middle">WAKTU MASUK</th>
                            <th scope="col" class="align-middle">JATUH TEMPO</th>
                            <th scope="col" class="align-middle">STATUS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($data)>0)
                        @foreach($data as $no => $dt)
                            
                        <tr>
                           <td class="align-middle">{{ $no+1 }}</td>
                           <td class="align-middle">
                              <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" autocomplete="off" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                   <i class="bi bi-gear-wide-connected"></i>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  <li><a class="dropdown-item" href="/deletemanajemenkamar/{{  encryptId($dt->id)  }}"><i class="bi bi-trash-fill"></i> Hapus</a></li>
                                  <li><a class="dropdown-item" href="/editpembayran/{{ $dt->id }}" data-bs-toggle="modal" data-bs-target="#editpembayaran{{ $dt->id }}"><i class="fa-solid fa-money-bill"></i></i> Edit Data</a></li>
                                  <li><a class="dropdown-item" href="/cetaknota/{{ encryptId($dt->id) }}"><i class="fa-solid fa-file-invoice"></i></i> Cetak Nota</a></li>
                                </ul>
                              </div> 
                            </td>
                           <td class="align-middle">{{ $dt->kamar->noKamar }}</td>
                           <td class="align-middle">{{ $dt->penghuni->nama }}</td>
                           <td class="align-middle">{{ 'Rp '.number_format($dt->harga, 0, ',', '.') }}</td>
                           <td class="align-middle">{{ $dt->kwhAwal }}</td>
                           <td class="align-middle">{{ $dt->kwhAkhir }}</td>
                           <td class="align-middle">{{ 'Rp '.number_format($dt->listrik, 0, ',', '.') }}</td>
                           <td class="align-middle">{{ 'Rp '.number_format($dt->sampah, 0, ',', '.') }}</td>
                           <td class="align-middle">{{ 'Rp '.number_format($dt->lain, 0, ',', '.') }}</td>
                           <td class="align-middle">{{ 'Rp '.number_format($dt->total, 0, ',', '.') }}</td>
                           <td class="align-middle">{{ $dt->waktuMasuk }}</td>
                           <td class="align-middle">{{ $dt->jatuhTempo }}</td>
                           <td class="align-middle"><a class="btn {{ $dt->status == 'Belum Bayar' ? 'btn-danger' : '' }}{{ $dt->status == 'Sudah Bayar' ? 'btn-success' : '' }}">{{ $dt->status }}</a></td>
                        </tr>
                                {{-- EDIT MODAL --}}
                            <div class="modal fade" id="editpembayaran{{ $dt->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Pembayaran</h1>
                                      <button autocomplete="off" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="/updatepembayaran/{{ $dt->id }}" method="post" encautocomplete="off" type="multipart/form-data">
                                        
                                            @csrf
                                            <div class="mb-3">
                                              <label for="">Biaya Lain</label>
                                              <div class="input-group">
                                                <span class="input-group-text">Rp</span>
                                                <input autocomplete="off" type="number" class="form-control" name="lain" 
                                                placeholder="Biaya Lain(Opsional)" value="{{ $dt->lain }}">
                                              </div>
                                              
                                              <label for="">Keterangan</label>
                                              <input autocomplete="off" type="text" class="form-control" name="ketLain" placeholder="Nama Biaya Lain(Opsional)" value="{{ $dt->ketLain }}">
                                            </div>
                                          
                                            <div class="modal-footer">
                                              <button autocomplete="off" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                              <button autocomplete="off" type="submit" class="btn btn-primary">Save Data</button>
                                             </form>
                                         </div>
                                  </div>
                                </div>
                              </div>
                        </div>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
            
        </div>

    </div>


    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/limit.js') }}"></script>
    <script>
      @if(Session::has('updatePembayaran'))
    
      toastr.success('{{ Session::get('updatePembayaran') }}');

      @endif
    
    </script>

@endsection