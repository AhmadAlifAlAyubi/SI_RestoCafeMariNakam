@extends('template.main')

@section('konten')
    <div class="col-md-8">
        <div class="card card-user">
            <div class="card-header">
                <h8 class="card-title">Edit Profile</h8>
            </div>
            <div class="card-body">
                <form action="pegawaiInsert" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-4 pr-1">
                            <div class="form-group">
                                <label for="ID_User">ID User</label>
                                <select id="ID_User" class="form-control" name="ID_User">
                                    <option value="">--Select--</option>
                                    @foreach ($user as $row)
                                        <option value="{{ $row->ID_User }}">{{ $row->ID_User }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 pr-1">
                            <div class="form-group">
                                <label for="exampleInputEmail1">ID Pegawai</label>
                                <input type="text" name="ID_Pegawai" class="form-control" placeholder="ID">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Nama Pegawai</label>
                                <input type="text" name="Nama_Pegawai" class="form-control" placeholder="Nama"
                                    value="">
                            </div>
                        </div>
                        <div class="col-md-4 pl-1">
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <input type="text" name="Jenis_Kelamin" class="form-control" placeholder="Jenis Kelamin"
                                    value="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Alamat Pegawai</label>
                                <input type="text" name="Alamat_Pegawai" class="form-control" placeholder="alamat"
                                    value="">
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
