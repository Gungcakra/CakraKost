@extends('layout.admin')

@section('maincontent')
<div class="main-content">
    <div class="page-content">

        {{-- STARTS --}}
        <div class="container-fluid">
            <div class="row d-flex">
                <h1 class="text-center">{{ $title }}</h1>
                <div class="col-sm-4">
                    <a href="" class="btn btn-success mb-2" data-bs-toggle="modal" data-bs-target="#modalAddKamar">Tambah +</a>

                </div>
            </div>
            <div class="row bg-white shadow rounded ">

              <div class="table-responsive p-3">
                  <table class="table table-striped">
                      <thead class="table-dark">
  
                          
                          <tr>
                              <th scope="col">#</th>
                              <th scope="col">AKSI</th>
                              <th scope="col">NO KAMAR</th>
                              <th scope="col">KWH AWAL</th>
                              <th scope="col">HARGA KAMAR</th>
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
                                   <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                      <i class="bi bi-gear-wide-connected"></i>
                                   </button>
                                   <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                     <li><a class="dropdown-item" href="#editkamar{{ $dt->id }}" name="edit" data-bs-toggle="modal" data-bs-target="#editkamar{{ $dt->id }}"><i class="bi bi-pencil-fill"></i> Edit</a></li>
                                     <li><a class="dropdown-item" href="/deletekamar/{{ $dt->id }}"><i class="bi bi-trash-fill"></i> Hapus</a></li>
                                   </ul>
                                 </div>
                                    
                              </td>
                              <td>{{ $dt->noKamar }}</td>
                              <td>{{ $dt->kwhAwal }}</td>
                              <td> {{ 'Rp '.number_format($dt->hargaKamar, 0, ',', '.') }}</td>
                              <td>{{ $dt->status }}</td>
                          </tr>
                                  {{-- EDIT MODAL --}}
                              <div class="modal fade" id="editkamar{{ $dt->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Kamar</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                          <form action="/updatekamar/{{ $dt->id }}" method="post" enctype="multipart/form-data">
                                          
                                              @csrf
                                              <div class="mb-3">
                                                <label for="">No Kamar</label>
                                                <input autocomplete="off" type="text" class="form-control" name="noKamar" placeholder="No Kamar" value="{{ $dt->noKamar }}">
                                              </div>
                                              <div class="mb-3">
                                                <label for="">Kwh Awal</label>
                                               <input autocomplete="off" type="number" class="form-control" name="kwhAwal" placeholder="Harga Kamar" id="" value="{{ $dt->kwhAwal }}">
                                              </div>
                                              <div class="mb-3">
                                                <label for="">Harga Kamar</label>
                                               <input autocomplete="off" type="number" class="form-control" name="hargaKamar" placeholder="Harga Kamar" id="" value="{{ $dt->hargaKamar }}">
                                              </div>
                                              <div class="mb-3">
                                                  <label for="" class="form-label">Status</label>
                                                  <select
                                                      class="form-select form-select-lg"
                                                      name="status"
                                                      id=""
                                                  >
                                                      <option value="Kosong" {{ $dt->status === 'Kosong'? 'selected' : '' }}>Kosong</option>
                                                      <option value="Isi" {{ $dt->status === 'Isi'? 'selected' : '' }}>Isi</option>
                                                  </select>
                                               </div>
                                           
                                           
                                               <div class="modal-footer">
                                                   <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                   <button type="submit" class="btn btn-primary">Save Data</button>
                                                  </form>
                                              </div>
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

    </div>


    <div class="modal fade" id="modalAddKamar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Add Data Kamar</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/storekamar" method="post" enctype="multipart/form-data">

                    @csrf
                    <div class="mb-3">
                      <label for="">No Kamar</label>
                      <input autocomplete="off" type="text" class="form-control" name="noKamar" placeholder="No Kamar">
                    </div>
                    <div class="mb-3">
                      <label for="">Kwh Awal</label>
                     <input autocomplete="off" type="number" class="form-control" name="kwhAwal" placeholder="Harga Kamar" id="">
                    </div>
                    <div class="mb-3">
                      <label for="">Harga Kamar</label>
                     <input autocomplete="off" type="number" class="form-control" name="hargaKamar" placeholder="Harga Kamar" id="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Status</label>
                        <select
                            class="form-select form-select-lg"
                            name="status"
                            id=""
                        >
                            <option selected>Pilih Status</option>
                            <option value="Kosong">Kosong</option>
                            <option value="Isi">Isi</option>
                        </select>
                     </div>
                  
                   
                     <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                         <button type="submit" class="btn btn-primary">Save Data</button>
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
    @if(Session::has('storekamar'))

    toastr.success('{{ Session::get('storekamar') }}');
    @elseif(Session::has('updatekamar'))
    toastr.success('{{ Session::get('updatekamar') }}');
    @elseif(Session::has('deletekamar'))
    toastr.success('{{ Session::get('deletekamar') }}');
    @endif

</script>
@endsection