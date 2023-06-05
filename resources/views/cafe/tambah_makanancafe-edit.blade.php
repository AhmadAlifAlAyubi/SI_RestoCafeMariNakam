@extends('template.main')

@section('konten')
    <div class="col-md-8">
        <div class="card card-user">
            <div class="card-header">
                <h8 class="card-title">Tambah Makanan</h8>
            </div>
            <div class="card-body">
                <form action="/makanancafeUpdate/{{ $makanancafe->ID_Makanan }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-5 px-1">
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
                                <label>ID Makanan</label>
                                <input type="text" name="ID_Makanan" class="form-control" placeholder="ID"
                                    value="{{ $makanancafe->ID_Makanan }}">
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <div class="form-group">
                                <label>Nama Makanan</label>
                                <input type="text" name="Nama_Makanan" class="form-control" placeholder="Nama"
                                    value="{{ $makanancafe->Nama_Makanan }}">
                            </div>
                        </div>

                    </div>
                    {{-- <div class="row">
                  <div class="mb-3 px-3">
                      <label for="formFile" class="form-label">Default file input example</label>
                      <input class="form-control" type="file" id="formFile">
                  </div>
              </div> --}}
                    <div class="col-md-4 px-0">
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="text" name="Harga_Makanan" class="form-control" placeholder="Harga"
                                value="{{ $makanancafe->Harga_Makanan }}">
                        </div>
                    </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group px-3">
                        <label>Deskripsi Makanan</label>
                        <textarea class="form-control textarea" class="form-control" name="Deskripsi_Makanan" placeholder="Deskripsi"
                            value="{{ $makanancafe->Deskripsi_Makanan }}"></textarea>
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
