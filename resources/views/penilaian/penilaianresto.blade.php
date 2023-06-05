@extends('template.main')

@section('konten')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tabel Penilaian Restoran</h4>
                </div>
                <div class="update ml-auto mr-auto">
                    <a href="/penilaianrestoCreate">
                        <button class="btn btn-primary btn-neutral">
                            Tambah Data
                        </button>
                    </a>
                    <a href="/penilaianrestopdf">
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
                                        ID Penilaian Restoran
                                    </th>
                                    <th>
                                        ID Pembeli
                                    </th>
                                    <th>
                                        ID Restoran
                                    </th>
                                    <th>
                                        ID Kriteria Restoran
                                    </th>
                                    <th>
                                        Nilai Penilaian Restoran
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($penilaianresto as $data)
                                    <tr>
                                        <td scope="data">
                                            {{ $data->ID_Penilaian_Restoran }}
                                        </td>
                                        <td>
                                            {{ $data->ID_Pelanggan }}
                                        </td>
                                        <td>
                                            {{ $data->ID_Restoran }}
                                        </td>
                                        <td>
                                            {{ $data->ID_Kriteria_Restoran }}
                                        </td>
                                        <td>
                                            {{ $data->Nilai_Penilaian_Restoran }}
                                        </td>
                                        <td>
                                            <a href="/penilaianrestoEdit/{{ $data->ID_Penilaian_Restoran }}" type="button"
                                                class="btn btn-warning">Edit</a>
                                            <a href="/penilaianrestoDelete/{{ $data->ID_Penilaian_Restoran }}"
                                                type="button" class="btn btn-danger">Hapus</a>
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
