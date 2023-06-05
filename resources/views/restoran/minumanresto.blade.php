@extends('template.main')

@section('konten')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Tabel Minuman Restoran</h4>
                </div>
                <div class="update ml-auto mr-auto">
                    <a href="/minumanrestoCreate">
                        <button class="btn btn-primary btn-neutral">
                            Tambah Data
                        </button>
                    </a>
                    <a href="/minumanrestoPDF">
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
                                        ID Minuman
                                    </th>
                                    <th>
                                        Nama Minuman
                                    </th>
                                    <th>
                                        Harga
                                    </th>
                                    <th>
                                        Deskripsi Minuman
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($minumanresto as $data)
                                    <tr>
                                        <td scope="data">
                                            {{ $data->ID_Restoran }}
                                        </td>
                                        <td>
                                            {{ $data->ID_Minuman }}
                                        </td>
                                        <td>
                                            {{ $data->Nama_Minuman }}
                                        </td>
                                        <td>
                                            {{ $data->Harga_Minuman }}
                                        </td>
                                        <td>
                                            {{ $data->Deskripsi_Minuman }}
                                        </td>
                                        <td>
                                            <a href="/minumanrestoEdit/{{ $data->ID_Minuman }}" type="button"
                                                class="btn btn-warning">Edit</a>
                                            <a href="/minumanrestoDelete/{{ $data->ID_Minuman }}" type="button"
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
