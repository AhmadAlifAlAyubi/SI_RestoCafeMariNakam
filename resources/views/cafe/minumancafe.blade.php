@extends('template.main')

@section('konten')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Tabel Minuman cafe</h4>
                </div>
                <div class="update ml-auto mr-auto">
                    <a href="/minumancafeCreate">
                        <button class="btn btn-primary btn-neutral">
                            Tambah Data
                        </button>
                    </a>
                    <a href="/minumancafePDF">
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
                                        ID Cafe
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
                                <tr>
                                    @foreach ($minumancafe as $data)
                                <tr>
                                    <td scope="data">
                                        {{ $data->ID_Cafe }}
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
                                        <a href="/minumancafeEdit/{{ $data->ID_Minuman }}" type="button"
                                            class="btn btn-warning">Edit</a>
                                        <a href="/minumancafeDelete/{{ $data->ID_Minuman }}" type="button"
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
