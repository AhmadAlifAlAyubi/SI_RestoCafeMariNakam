@extends('template.main')

@section('konten')
    <div class="col-md-8">
        <div class="card card-user">
            <div class="card-header">
                <h8 class="card-title">Edit Profile</h8>
            </div>
            <div class="card-body">
                <form action="/pesananrestoUpdate/{{ $pesananrestoran->ID_Pesanan_Restoran }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-4 pr-1">
                            <div class="form-group">
                                <label for="exampleInputEmail1">ID Pesanan</label>
                                <input type="text" name="ID_Pesanan_Restoran" class="form-control" placeholder="ID"
                                    value="{{ $pesananrestoran->ID_Pesanan_Restoran }}">
                            </div>
                        </div>
                        <div class="col-md-5 pr-1">
                            <label for="ID_Pelanggan">Id Pembeli</label>
                            <select id="ID_Pelanggan" class="form-control" name="ID_Pelanggan">
                                <option value="">--Select--</option>
                                @foreach ($pembeli as $row)
                                    <option value="{{ $row->ID_Pelanggan }}">{{ $row->ID_Pelanggan }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
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
                        <div class="col-md-5 pr-1">
                            <div class="form-group">
                                <label for="ID_Makanan">ID Makanan</label>
                                <select id="ID_Makanan" class="form-control" name="ID_Makanan">
                                    <option value="">--Select--</option>
                                    @foreach ($makananresto as $row)
                                        <option value="{{ $row->ID_Makanan }}">{{ $row->ID_Makanan }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 pr-1">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Jumlah Makanan</label>
                                <input type="text" name="Jumlah_Makanan" class="form-control" placeholder="Jumlah"
                                    value="{{ $pesananrestoran->Jumlah_Makanan }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 pr-1">
                            <div class="form-group">
                                <label for="ID_Minuman">ID Minuman</label>
                                <select id="ID_Minuman" class="form-control" name="ID_Minuman">
                                    <option value="">--Select--</option>
                                    @foreach ($minumanresto as $row)
                                        <option value="{{ $row->ID_Minuman }}">{{ $row->ID_Minuman }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 pr-1">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Jumlah Minuman</label>
                                <input type="text" name="Jumlah_Minuman" class="form-control" placeholder="Jumlah"
                                    value="{{ $pesananrestoran->Jumlah_Minuman }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 pr-1">
                            <div class="form-group">
                                <label>Total Harga</label>
                                <input type="text" name="Total_Harga" class="form-control" placeholder="Total"
                                    value="{{ $pesananrestoran->Total_Harga }}">
                            </div>
                        </div>
                        <div class="col-md-4 pr-1">
                            <div class="form-group">
                                <label>Tanggal Pesanan</label>
                                <input type="text" name="Tanggal_Pesanan" class="form-control" placeholder="Tanggal"
                                    value="{{ $pesananrestoran->Tanggal_Pesanan }}">
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
