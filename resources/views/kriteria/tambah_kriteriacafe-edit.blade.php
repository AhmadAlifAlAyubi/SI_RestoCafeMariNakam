@extends('template.main')

@section('konten')
    <div class="col-md-8">
        <div class="card card-user">
            <div class="card-header">
                <h8 class="card-title">Edit Profile</h8>
            </div>
            <div class="card-body">
                <form action="/kriteriacafeUpdate/{{ $kriteriacafe->ID_Kriteria_Cafe }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-4 pr-1">
                            <div class="form-group">
                                <label for="exampleInputEmail1">ID Kriteria Cafe</label>
                                <input type="text" name="ID_Kriteria_Cafe" class="form-control" placeholder="ID"
                                    value="{{ $kriteriacafe->ID_Kriteria_Cafe }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 pr-1">
                            <div class="form-group">
                                <label>Nama Kriteria Cafe</label>
                                <input type="text" name="Nama_Kriteria_Cafe" class="form-control" placeholder="Nama"
                                    value="{{ $kriteriacafe->Nama_Kriteria_Cafe }}">
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
