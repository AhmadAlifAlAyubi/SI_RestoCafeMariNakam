@extends('template.main')

@section('konten')
    <div class="col-md-8">
        <div class="card card-user">
            <div class="card-header">
                <h8 class="card-title">Edit Profile</h8>
            </div>
            <div class="card-body">
                <form action="/kriteriarestoUpdate/{{ $kriteriaresto->ID_Kriteria_Restoran }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-4 pr-1">
                            <div class="form-group">
                                <label for="exampleInputEmail1">ID Kriteria Restoran</label>
                                <input type="text" name="ID_Kriteria_Restoran" class="form-control" placeholder="ID"
                                    value="{{ $kriteriaresto->ID_Kriteria_Restoran }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 pr-1">
                            <div class="form-group">
                                <label>Nama Kriteria Restoran</label>
                                <input type="text" name="Nama_Kriteria_Restoran" class="form-control" placeholder="Nama"
                                    value="{{ $kriteriaresto->Nama_Kriteria_Restoran }}">
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
    </div>
@endsection
