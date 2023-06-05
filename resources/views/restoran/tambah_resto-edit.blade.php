@extends('template.main')

@section('konten')
    <div class="col-md-8">
        <div class="card card-user">
            <div class="card-header">
                <h8 class="card-title">Edit Profile</h8>
            </div>
            <div class="card-body">
                <form action="/restoranUpdate/{{ $restoran->ID_Restoran }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-4 pr-1">
                            <div class="form-group">
                                <label for="exampleInputEmail1">ID Restoran</label>
                                <input type="text" name="ID_Restoran" class="form-control" placeholder="ID" value="{{ $restoran->ID_Restoran }}">
                            </div>
                        </div>
                        <div class="col-md-5 px-1">
                            <div class="form-group">
                                <label for="ID_Pegawai">ID Pegawai</label>
                                <select id="ID_Pegawai" class="form-control" name="ID_Pegawai">
                                    <option value="">--Select--</option>
                                    @foreach ($pegawai as $row)
                                        <option value="{{ $row->ID_Pegawai }}">{{ $row->ID_Pegawai }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 pr-1">
                            <div class="form-group">
                                <label>Nama Restoran</label>
                                <input type="text" name="Nama_Restoran" class="form-control" placeholder="Nama" value="{{ $restoran->Nama_Restoran }}">
                            </div>
                        </div>
                    </div>
                    <div class = "row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Alamat Restoran</label>
                                <input type="text" name="Alamat_Restoran" class="form-control" placeholder="alamat" value="{{ $restoran->Alamat_Restoran }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 pr-1">
                            <div class="form-group">
                                <label>Rating Restoran</label>
                                <input type="text" name="Rating_Restoran" class="form-control" placeholder="Rating" value="{{ $restoran->Rating_Restoran }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="update ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary btn-round">Edit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
