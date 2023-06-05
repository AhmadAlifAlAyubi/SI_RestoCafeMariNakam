@extends('template.main')

@section('konten')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tabel Penilaian Cafe</h4>
                </div>
                <div class="update ml-auto mr-auto">
                    <a href="/penilaiancafeCreate">
                        <button class="btn btn-primary btn-neutral">
                            Tambah Data
                        </button>
                    </a>
                    <a href="/penilaiancafepdf">
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
                                        ID Penilaian Cafe
                                    </th>
                                    <th>
                                        ID Pembeli
                                    </th>
                                    <th>
                                        ID Cafe
                                    </th>
                                    <th>
                                        ID Kriteria Cafe
                                    </th>
                                    <th>
                                        Nilai Penilaian Cafe
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($penilaiancafe as $data)
                                    <tr>
                                        <td scope="data">
                                            {{ $data->ID_Penilaian_Cafe }}
                                        </td>
                                        <td>
                                            {{ $data->ID_Pelanggan }}
                                        </td>
                                        <td>
                                            {{ $data->ID_Cafe }}
                                        </td>
                                        <td>
                                            {{ $data->ID_Kriteria_Cafe }}
                                        </td>
                                        <td>
                                            {{ $data->Nilai_Penilaian_Cafe }}
                                        </td>
                                        <td>
                                            <a href="/penilaiancafeEdit/{{ $data->ID_Penilaian_Cafe }}" type="button"
                                                class="btn btn-warning">Edit</a>
                                            <a href="/penilaiancafeDelete/{{ $data->ID_Penilaian_Cafe }}" type="button"
                                                class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
