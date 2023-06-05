@extends('template.main')

@section('konten')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Tabel Restoran</h4>
                </div>
                <div class="update ml-auto mr-auto">
                    <a href="/restoranCreate">
                        <button class="btn btn-primary btn-neutral">
                            Tambah Data
                        </button>
                    </a>
                    <a href="/restoranPDF">
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
                                        ID Pegawai
                                    </th>
                                    <th>
                                        Nama Restoran
                                    </th>
                                    <th class="text-center">
                                        Alamat Restoran
                                    </th>
                                    <th>
                                        Rating Restoran
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($restoran as $data)
                                    <tr>
                                        <td scope="data">
                                            {{ $data->ID_Restoran }}
                                        </td>
                                        <td>
                                            {{ $data->ID_Pegawai }}
                                        </td>
                                        <td>
                                            {{ $data->Nama_Restoran }}
                                        </td>
                                        <td class="text-center">
                                            {{ $data->Alamat_Restoran }}
                                        </td>
                                        <td>
                                            {{ $data->Rating_Restoran }}
                                        </td>
                                        <td>
                                            <a href="/restoranEdit/{{ $data->ID_Restoran }}" type="button"
                                                class="btn btn-warning">Edit</a>
                                            <a href="/restoranDelete/{{ $data->ID_Restoran }}" type="button"
                                                class="btn btn-danger">Hapus</a>
                                        </td>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
