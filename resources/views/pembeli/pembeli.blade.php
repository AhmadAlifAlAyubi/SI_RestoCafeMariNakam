@extends('template.main')

@section('konten')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Tabel Pembeli</h4>
                </div>
                <div class="update ml-auto mr-auto">
                    <a href="/pembeliCreate">
                        <button class="btn btn-primary btn-neutral">
                            Tambah Data
                        </button>
                    </a>
                    <a href="/pembelipdf">
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
                                        ID User
                                    </th>
                                    <th>
                                        ID Pembeli
                                    </th>
                                    <th>
                                        Nama
                                    </th>
                                    <th>
                                        Jenis Kelamin
                                    </th>
                                    <th class="text-center">
                                        Alamat
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pembeli as $data)
                                    <tr>
                                        <td scope="data">
                                            {{ $data->ID_User }}
                                        </td>
                                        <td>
                                            {{ $data->ID_Pelanggan }}
                                        </td>
                                        <td>
                                            {{ $data->Nama_Pelanggan }}
                                        </td>
                                        <td>
                                            {{ $data->Jenis_Kelamin }}
                                        </td>
                                        <td>
                                            {{ $data->Alamat_Pelanggan }}
                                        </td>
                                        <td>
                                            <a href="/pembeliEdit/{{ $data->ID_Pelanggan }}" type="button"
                                                class="btn btn-warning">Edit</a>
                                            <a href="/pembeliDelete/{{ $data->ID_Pelanggan }}" type="button"
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
