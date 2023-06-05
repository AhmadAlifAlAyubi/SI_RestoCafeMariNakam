@extends('template.main')

@section('konten')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tabel Pegawai</h4>
                </div>
                <div class="update ml-auto mr-auto">
                    <a href="/pegawaiCreate">
                        <button class="btn btn-primary btn-neutral">
                            Tambah Data
                        </button>
                    </a>
                    <a href="/pegawaipdf">
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
                                        ID Pegawai
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
                                @foreach ($pegawai as $data)
                                    <tr>
                                        <td scope="data">
                                            {{ $data->ID_User }}
                                        </td>
                                        <td>
                                            {{ $data->ID_Pegawai }}
                                        </td>
                                        <td>
                                            {{ $data->Nama_Pegawai }}
                                        </td>
                                        <td>
                                            {{ $data->Jenis_Kelamin }}
                                        </td>
                                        <td>
                                            {{ $data->Alamat_Pegawai }}
                                        </td>
                                        <td>
                                            <a href="/pegawaiEdit/{{ $data->ID_Pegawai }}" type="button"
                                                class="btn btn-warning">Edit</a>
                                            <a href="/pegawaiDelete/{{ $data->ID_Pegawai }}" type="button"
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
