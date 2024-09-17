@extends('layout.admin')

@section('maincontent')
<div class="main-content">
    <div class="page-content">

        {{-- STARTS --}}
        <div class="container-fluid">
            <div class="row d-flex">
                <h1 class="text-center">{{ $title }}</h1>
                <div class="col-sm-4">
                    <a href="" class="btn btn-success mb-2" data-bs-toggle="modal" data-bs-target="#modalAddManajemenKamar">Tambah +</a>

                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="table-dark">

                        
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">AKSI</th>
                            <th scope="col">NO KAMAR</th>
                            <th scope="col">NAMA PENGHUNI</th>
                            <th scope="col">HARGA</th>
                            <th scope="col">KWH AWAL</th>
                            <th scope="col">KWH AKHIR</th>
                            <th scope="col">WAKTU MASUK</th>
                            <th scope="col">JATUH TEMPO</th>
                            <th scope="col">STATUS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($data)>0)
                        @foreach($data as $no => $dt)
                            
                        <tr>
                            <td>{{ $no+1 }}</td>
                            <td>
                              <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" autocomplete="off" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                   <i class="bi bi-gear-wide-connected"></i>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  <li><a class="dropdown-item" href="#editmanajemenkamar{{ $dt->id }}" name="edit" data-bs-toggle="modal" data-bs-target="#editmanajemenkamar{{ $dt->id }}"><i class="bi bi-pencil-fill"></i> Edit</a></li>
                                  <li><a class="dropdown-item" href="/deletemanajemenkamar/{{ $dt->id }}"><i class="bi bi-trash-fill"></i> Set Keluar</a></li>
                                </ul>
                              </div>
                            </td>
                            <td>{{ $dt->kamar->noKamar }}</td>
                            <td>{{ $dt->penghuni->nama }}</td>
                            <td>{{ 'Rp '.number_format($dt->harga, 0, ',', '.') }}</td>
                            <td>{{ $dt->kwhAwal }}</td>
                            <td>{{ $dt->kwhAkhir }}</td>
                            <td>{{ $dt->waktuMasuk }}</td>
                            <td>{{ $dt->jatuhTempo }}</td>
                            <td>{{ $dt->kamar->status }}</td>
                        </tr>
                                {{-- EDIT MODAL --}}
                            <div class="modal fade" id="editmanajemenkamar{{ $dt->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Kamar</h1>
                                      <button autocomplete="off" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="/updatemanajemenkamar/{{ $dt->id }}" method="post" encautocomplete="off" type="multipart/form-data">
                                        
                                            @csrf
                                            <div class="mb-3">
                                              <label for="">Kwh Akhir</label>
                                              <input autocomplete="off" type="text" class="form-control" name="kwhAkhir" placeholder="Kwh Akhir" value="{{ $dt->kwhAkhir }}">
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


    <div class="modal fade" id="modalAddManajemenKamar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Add Manajemen Kamar</h1>
              <button autocomplete="off" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/storemanajemenkamar" method="post" encautocomplete="off" type="multipart/form-data">

                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">No Kamar</label>
                      <div class="input-group mb-3">
                          <select class="form-select" id="inputGroupSelect01" name="idKamar">
                            <option selected>No Kamar</option>
                            @foreach($dataKamar as $dk)
                            <option value="{{ $dk->id }}">{{ $dk->noKamar }}</option>
                            @endforeach
                          </select>
                      </div>
                  </div>
                  <div class="form-group">
                    <label >Nama Penghuni</label>
                    <div class="input-group mb-3">
                      <select class="form-select" id="inputGroupSelect01" name="idPenghuni">
                        <option selected>Pilih Penghuni</option>
                        @foreach($dataPenghuni as $dp) 
                        <option value="{{ $dp->id }}">{{ $dp->nama }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                    
                    <label for="">Kwh Awal</label>
                   <div class="input-group mb-3">
                    <input type="text" class="form-control" name="kwhAwal">
                   </div>
                    <label for="">Waktu Masuk</label>
                   <div class="input-group mb-3">
                    <input type="date" class="form-control" name="waktuMasuk">
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
</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('js/limit.js') }}"></script>
<script>
  @if(Session::has('storeManajemenKamar'))

  toastr.success('{{ Session::get('storeManajemenKamar') }}');
  @elseif(Session::has('updateManajemenKamar'))
  toastr.success('{{ Session::get('updateManajemenKamar') }}');
  @elseif(Session::has('deleteManajemenKamar'))
  toastr.success('{{ Session::get('deleteManajemenKamar') }}');
  @endif

</script>

@endsection