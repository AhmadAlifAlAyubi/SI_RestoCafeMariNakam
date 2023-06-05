@extends('template.main')

@section('konten')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Tabel Makanan Restoran</h4>
                </div>
                <div class="update ml-auto mr-auto">
                    <a href="/makananrestoCreate">
                        <button class="btn btn-primary btn-neutral">
                            Tambah Data
                        </button>
                    </a>
                    <a href="/makananrestoPDF">
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
                                        ID Restoran
                                    </th>
                                    <th>
                                        ID Makanan
                                    </th>
                                    <th>
                                        Nama Makanan
                                    </th>
                                    <th>
                                        Harga
                                    </th>
                                    <th>
                                        Deskripsi Makanan
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($makananresto as $data)
                                    <tr>
                                        <td scope="data">
                                            {{ $data->ID_Restoran }}
                                        </td>
                                        <td>
                                            {{ $data->ID_Makanan }}
                                        </td>
                                        <td>
                                            {{ $data->Nama_Makanan }}
                                        </td>
                                        <td>
                                            {{ $data->Harga_Makanan }}
                                        </td>
                                        <td>
                                            {{ $data->Deskripsi_Makanan }}
                                        </td>
                                        <td>
                                            <a href="/makananrestoEdit/{{ $data->ID_Makanan }}" type="button"
                                                class="btn btn-warning">Edit</a>
                                            <a href="/makananrestoDelete/{{ $data->ID_Makanan }}" type="button"
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
