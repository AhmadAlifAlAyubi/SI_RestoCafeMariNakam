@extends('template.main')

@section('konten')
    <div class="col-md-8">
        <div class="card card-user">
            <div class="card-header">
                <h8 class="card-title">Tambah Minuman</h8>
            </div>
            <div class="card-body">
                <form action="/minumanrestoUpdate/{{ $minumanresto->ID_Minuman }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-5 pr-1">
                            <div class="form-group">
                                <label for="ID_Restoran">ID Restoran</label>
                                <select id="ID_Restoran" class="form-control" name="ID_Restoran">
                                    <option value="">--Select--</option>
                                    @foreach ($restoran as $row)
                                        <option value="{{ $row->ID_Restoran }}">{{ $row->ID_Restoran }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>ID Minuman</label>
                                <input type="text" name="ID_Minuman" class="form-control" placeholder="ID"
                                    value="{{ $minumanresto->ID_Minuman }}">
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <div class="form-group">
                                <label>Nama Minuman</label>
                                <input type="text" name="Nama_Minuman" class="form-control" placeholder="Nama"
                                    value="{{ $minumanresto->Nama_Minuman }}">
                            </div>
                        </div>

                    </div>
                    {{-- <div class="row">
                <div class="mb-3 px-3">
                    <label for="exampleInputUsername1" class="form-label">Masukkan Gambar</label>
                    <input class="form-control" type="file" id="formFile" src="{{ (!empty($profiledata->photo))? url}}">
                </div>
            </div> --}}
                    <div class="col-md-4 px-0">
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="text" name="Harga_Minuman" class="form-control" placeholder="Harga"
                                value="{{ $minumanresto->Harga_Minuman }}">
                        </div>
                    </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group px-3">
                        <label>Deskripsi Minuman</label>
                        <textarea class="form-control textarea" name="Deskripsi_Minuman" placeholder="Deskripsi"
                            value="{{ $minumanresto->Deskripsi_Minuman }}"></textarea>
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
