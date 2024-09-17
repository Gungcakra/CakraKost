@extends('layout.admin')

@section('maincontent')
<div class="main-content">
    <div class="page-content">

        {{-- STARTS --}}
        <div class="container-fluid">
            <div class="row d-flex">
                <h1 class="text-center">{{ $title }}</h1>
                <div class="col-sm-4">
                    <a href="" class="btn btn-success mb-2" data-bs-toggle="modal" data-bs-target="#modalAddPenghuni">Tambah +</a>

                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="table-dark">

                        
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">AKSI</th>
                            <th scope="col">NAMA PENGHUNI</th>
                            <th scope="col">TANGGAL LAHIR</th>
                            <th scope="col">NOMOR TELEPON</th>
                            <th scope="col">FOTO KTP</th>
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
                                  <li><a class="dropdown-item" href="#editpenghuni{{ $dt->id }}" name="edit" data-bs-toggle="modal" data-bs-target="#editpenghuni{{ $dt->id }}"><i class="bi bi-pencil-fill"></i> Edit</a></li>
                                  <li><a class="dropdown-item" href="/deletepenghuni/{{ $dt->id }}"><i class="bi bi-trash-fill"></i> Hapus</a></li>
                                </ul>
                              </div>
                            </td>
                            <td>{{ $dt->nama }}</td>
                            <td>{{ $dt->tanggalLahir }}</td>
                            <td>{{ $dt->noTelp }}</td>
                        </tr>
                                {{-- EDIT MODAL --}}
                            <div class="modal fade" id="editpenghuni{{ $dt->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data penghuni</h1>
                                      <button autocomplete="off" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="/updatepenghuni/{{ $dt->id }}" method="post" encautocomplete="off" type="multipart/form-data">
                                        
                                            @csrf
                                            <div class="mb-3">
                                              <label for="">Nama Penghuni</label>
                                              <input autocomplete="off" type="text" class="form-control" name="nama" placeholder="Nama Penghuni" value="{{ $dt->nama }}">
                                            </div>
                                            <div class="mb-3">
                                              <label for="">Tanggal Lahir</label>
                                             <input autocomplete="off" type="date" class="form-control" name="tanggalLahir" id="" value="{{ $dt->tanggalLahir }}">
                                            </div>
                                            <div class="mb-3">
                                              <label for="">Nomor Telepon</label>
                                              <input autocomplete="off" type="text" class="form-control" name="noTelp" placeholder="Nomor Telepon" value="{{ $dt->noTelp }}">
                                            </div>
                                            <div class="mb-3">
                                              <label for="">Foto KTP</label>
                                              <div class="input-group mb-3">
                                                <input type="file" name="fotoKtp" class="form-control" id="inputGroupFile02">
                                                <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                              </div>
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


    <div class="modal fade" id="modalAddPenghuni" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Add Data Penghuni</h1>
              <button autocomplete="off" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/storepenghuni" method="post" enctype="multipart/form-data">

                    @csrf
                    <div class="mb-3">
                      <label for="">Nama Penghuni</label>
                      <input autocomplete="off" type="text" class="form-control" name="nama" placeholder="Nama Penghuni" >
                    </div>
                    <div class="mb-3">
                      <label for="">Tanggal Lahir</label>
                     <input autocomplete="off" type="date" class="form-control" name="tanggalLahir" id="" >
                    </div>
                    <div class="mb-3">
                      <label for="">Nomor Telepon</label>
                      <input autocomplete="off" type="text" class="form-control" name="noTelp" placeholder="Nomor Telepon" >
                    </div>
                    <div class="mb-3">
                      <label for="">Upload Foto KTP</label>
                      <div class="input-group mb-3">
                        <input type="file" class="form-control" name="fotoKtp" id="inputGroupFile02">
                        <label class="input-group-text"  for="inputGroupFile02">Foto KTP</label>
                      </div>
                     
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
  @if(Session::has('storePenghuni'))

  toastr.success('{{ Session::get('storePenghuni') }}');
  @elseif(Session::has('updatePenghuni'))
  toastr.success('{{ Session::get('updatePenghuni') }}');
  @elseif(Session::has('deletePenghuni'))
  toastr.success('{{ Session::get('deletePenghuni') }}');
  @endif

</script>

@endsection