@extends('template.main')

@section('konten')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Tabel Cafe</h4>
                </div>
                <div class="update ml-auto mr-auto">
                    <a href="/cafeCreate">
                        <button class="btn btn-primary btn-neutral">
                            Tambah Data
                        </button>
                    </a>
                    <a href="/cafepdf">
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
                                    ID Pegawai
                                </th>
                                    <th>
                                        Nama Cafe
                                    </th>
                                    <th class="text-center">
                                        Alamat Cafe
                                    </th>
                                    <th>
                                        Rating Cafe
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cafe as $data)
                                    <tr>
                                        <td scope="data">
                                            {{ $data->ID_Cafe }}
                                        </td>
                                        <td>
                                            {{ $data->ID_Pegawai}}
                                        </td>
                                        <td>
                                            {{ $data->Nama_Cafe }}
                                        </td>
                                        <td>
                                            {{ $data->Alamat_Cafe }}
                                        </td>
                                        <td class="text-center">
                                            {{ $data->Rating_Cafe }}
                                        </td>
                                        <td>
                                            <a href="/cafeEdit/{{ $data->ID_Cafe }}" type="button"
                                                class="btn btn-warning">Edit</a>
                                            <a href="/cafeDelete/{{ $data->ID_Cafe }}" type="button"
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
