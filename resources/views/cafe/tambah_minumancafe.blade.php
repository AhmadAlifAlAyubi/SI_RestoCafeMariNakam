@extends('template.main')
 
@section('konten')
<div class="col-md-8">
    <div class="card card-user">
        <div class="card-header">
            <h8 class="card-title">Tambah Minuman</h8>
        </div>
        <div class="card-body">
            <form action="/minumancafeInsert" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-4 pr-1">
                        <div class="form-group">
                            <label for="ID_Cafe">ID Cafe</label>
                            <select id="ID_Cafe" class="form-control" name="ID_Cafe">
                                <option value="">--Select--</option>
                                @foreach ($cafe as $row)
                                    <option value="{{ $row->ID_Cafe }}">{{ $row->ID_Cafe }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>ID Minuman</label>
                            <input type="text" name="ID_Minuman" class="form-control" placeholder="ID" value="">
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <label>Nama Minuman</label>
                            <input type="text" name="Nama_Minuman" class="form-control" placeholder="Nama" value="">
                        </div>
                    </div>
                   
                </div>
                <div class="row">
                  {{-- <div class="mb-3 px-3">
                      <label for="formFile" class="form-label">Default file input example</label>
                      <input class="form-control" name="" type="file" id="formFile">
                  </div> --}}
              </div>
                <div class="col-md-4 px-0">
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" name="Harga_Minuman" class="form-control" placeholder="Harga" value="">
                    </div>
                </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group px-3">
                    <label>Deskripsi Minuman</label>
                    <textarea class="form-control textarea" name="Deskripsi_Minuman" placeholder="Deskripsi"></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="update ml-auto mr-auto">
                <button type="submit" class="btn btn-primary btn-round">Simpan</button>
            </div>
        </div>
        </form>
    </div>
</div>
@endsection