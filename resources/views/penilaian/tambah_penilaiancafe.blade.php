@extends('template.main')

@section('konten')
    <div class="col-md-8">
        <div class="card card-user">
            <div class="card-header">
                <h8 class="card-title">Edit Profile</h8>
            </div>
            <div class="card-body">
                <form action="penilaiancafeInsert" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-4 pr-1">
                            <div class="form-group">
                                <label for="exampleInputEmail1">ID Penilaian Cafe</label>
                                <input type="text" name="ID_Penilaian_Cafe" class="form-control" placeholder="ID">
                            </div>
                        </div>
                        <div class="col-md-5 pr-1">
                            <div class="form-group">
                                <label for="ID_Cafe">Id Cafe</label>
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
                        <div class="col-md-5 pr-1">
                            <div class="form-group">
                                <label for="ID_Pelanggan">Id Pembeli</label>
                                <select id="ID_Pelanggan" class="form-control" name="ID_Pelanggan">
                                    <option value="">--Select--</option>
                                    @foreach ($pembeli as $row)
                                        <option value="{{ $row->ID_Pelanggan }}">{{ $row->ID_Pelanggan }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-5 pr-1">
                            <div class="form-group">
                                <label for="ID_Kriteria_Cafe">Id Kriteria Cafe</label>
                                <select id="ID_Kriteria_Cafe" class="form-control" name="ID_Kriteria_Cafe">
                                    <option value="">--Select--</option>
                                    @foreach ($kriteriacafe as $row)
                                        <option value="{{ $row->ID_Kriteria_Cafe }}">{{ $row->ID_Kriteria_Cafe }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 pr1">
                            <div class="form-group">
                                <label>Nilai Penilaian Cafe</label>
                                <input type="text" name="Nilai_Penilaian_Cafe" class="form-control" placeholder="Nilai"
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
