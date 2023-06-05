@extends('template.main')

@section('konten')
    <div class="col-md-8">
        <div class="card card-user">
            <div class="card-header">
                <h8 class="card-title">Edit Profile</h8>
            </div>
            <div class="card-body">
                <form action="/pesanancafeUpdate/{{ $pesanancafe->ID_Pesanan_Cafe }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-4 pr-1">
                            <div class="form-group">
                                <label for="exampleInputEmail1">ID Pesanan</label>
                                <input type="text" name="ID_Pesanan_Cafe" class="form-control" placeholder="ID"
                                    value="{{ $pesanancafe->ID_Pesanan_Cafe }}">
                            </div>
                        </div>
                        <div class="col-md-5 px-1">
                            <div class="form-group">
                                <div class="col-md-4 pr-1">
                                    <label for="ID_Pelanggan">Id Pembeli</label>
                                    <select id="ID_Pelanggan" class="form-control" name="ID_Pelanggan">
                                        <option value="">--Select--</option>
                                        @foreach ($pembeli as $row)
                                            <option value="{{ $row->ID_Pelanggan }}">{{ $row->ID_Pelanggan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 pr-1">
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
                        <div class="col-md-5 pr-1">
                            <div class="form-group">
                                <label for="ID_Makanan">ID Makanan</label>
                                <select id="ID_Makanan" class="form-control" name="ID_Makanan">
                                    <option value="">--Select--</option>
                                    @foreach ($makanancafe as $row)
                                        <option value="{{ $row->ID_Makanan }}">{{ $row->ID_Makanan }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 pr-1">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Jumlah Makanan</label>
                                <input type="text" name="Jumlah_Makanan" class="form-control" placeholder="Jumlah"
                                    value="{{ $pesanancafe->Jumlah_Makanan }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 pr-1">
                            <div class="form-group">
                                <label for="ID_Minuman">ID Minuman</label>
                                <select id="ID_Minuman" class="form-control" name="ID_Minuman">
                                    <option value="">--Select--</option>
                                    @foreach ($minumancafe as $row)
                                        <option value="{{ $row->ID_Minuman }}">{{ $row->ID_Minuman }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 pr-1">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Jumlah Minuman</label>
                                <input type="text" name="Jumlah_Minuman" class="form-control" placeholder="Jumlah"
                                    value="{{ $pesanancafe->Jumlah_Minuman }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 pr-1">
                            <div class="form-group">
                                <label>Total Harga</label>
                                <input type="text" name="Total_Harga" class="form-control" placeholder="Total"
                                    value="{{ $pesanancafe->Total_Harga }}">
                            </div>
                        </div>
                        <div class="col-md-4 pr-1">
                            <div class="form-group">
                                <label>Tanggal Pesanan</label>
                                <input type="text" name="Tanggal_Pesan" class="form-control" placeholder="Tanggal"
                                    value="{{ $pesanancafe->Tanggal_Pesan }}">
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
