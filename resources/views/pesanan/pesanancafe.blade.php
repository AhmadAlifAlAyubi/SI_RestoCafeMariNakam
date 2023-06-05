@extends('template.main')

@section('konten')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Tabel Pesanan</h4>
                </div>
                <div class="update ml-auto mr-auto">
                    <a href="/pesanancafeCreate">
                        <button class="btn btn-primary btn-neutral">
                            Tambah Data
                        </button>
                    </a>
                    <a href="/pesanancafepdf">
                        <button class="btn btn-primary btn-neutral">
                            Cetak Data
                        </button>
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <tr>
                                    <th>
                                        ID Pesanan
                                    </th>
                                    <th>
                                        ID Pembeli
                                    </th>
                                    <th>
                                        ID cafe
                                    </th>
                                    <th>
                                        ID Makanan
                                    </th>
                                    <th>
                                        Jumlah Makanan
                                    </th>
                                    <th>
                                        ID Minuman
                                    </th>
                                    <th>
                                        Jumlah Minuman
                                    </th>
                                    <th>
                                        Tanggal Pesanan
                                    </th>
                                    <th>
                                        Total Harga
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pesanancafe as $data)
                                    <tr>
                                        <td scope="data">
                                            {{ $data->ID_Pesanan_Cafe }}
                                        </td>
                                        <td>
                                            {{ $data->ID_Pelanggan }}
                                        </td>
                                        <td>
                                            {{ $data->ID_Cafe }}
                                        </td>
                                        <td>
                                            {{ $data->ID_Makanan }}
                                        </td>
                                        <td>
                                            {{ $data->Jumlah_Makanan }}
                                        </td>
                                        <td>
                                            {{ $data->ID_Minuman }}
                                        </td>
                                        <td>
                                            {{ $data->Jumlah_Minuman }}
                                        </td>
                                        <td>
                                            {{ $data->Tanggal_Pesan }}
                                        </td>
                                        <td>
                                            {{ $data->Total_Harga }}
                                        </td>
                                        <td>
                                            <a href="/pesanancafeEdit/{{ $data->ID_Pesanan_Cafe }}" type="button"
                                                class="btn btn-warning">Edit</a>
                                            <a href="/pesanancafeDelete/{{ $data->ID_Pesanan_Cafe }}" type="button"
                                                class="btn btn-danger">Hapus</a>
                                        </td>
                                @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
