@extends('template.main')
 
@section('konten')
<div class="col-md-8">
  <div class="card card-user">
      <div class="card-header">
          <h8 class="card-title">Edit Profile</h8>
      </div>
      <div class="card-body">
        <form action="cafeInsert" method="POST" enctype="multipart/form-data">
            @csrf
              <div class="row">
                  <div class="col-md-4 pr-1">
                      <div class="form-group">
                          <label for="exampleInputEmail1">ID Cafe</label>
                          <input type="text" name="ID_Cafe" class="form-control" placeholder="ID">
                      </div>
                  </div>
                  <div class="col-md-4 pr-1">
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
                          <label>Nama Cafe</label>
                          <input type="text" name="Nama_Cafe" class="form-control" placeholder="Nama" value="">
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-12">
                      <div class="form-group">
                          <label>Alamat Cafe</label>
                          <input type="text" name="Alamat_Cafe" class="form-control" placeholder="alamat" value="">
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-4 pr-1">
                      <div class="form-group">
                          <label>Rating Cafe</label>
                          <input type="text" name="Rating_Cafe" class="form-control" placeholder="Rating" value="">
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