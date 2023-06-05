@extends('template.main')

@section('konten')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Tabel Kriteria Restoran</h4>
                </div>
                <div class="update ml-auto mr-auto">
                    <a href="/tambah_kriteriaresto">
                        <button class="btn btn-primary btn-neutral">
                            Tambah Data
                        </button>
                    </a>
                    <a href="/kriteriarestopdf">
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
                                        ID Kriteria Restoran
                                    </th>
                                    <th>
                                        Nama Kriteria Restoran
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kriteriaresto as $data)
                                    <tr>
                                        <td scope="data">
                                            {{ $data->ID_Kriteria_Restoran }}
                                        </td>
                                        <td>
                                            {{ $data->Nama_Kriteria_Restoran }}
                                        </td>
                                        <td>
                                            <a href="/kriteriarestoEdit/{{ $data->ID_Kriteria_Restoran }}" type="button"
                                                class="btn btn-warning">Edit</a>
                                            <a href="/kriteriarestoDelete/{{ $data->ID_Kriteria_Restoran }}" type="button"
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
