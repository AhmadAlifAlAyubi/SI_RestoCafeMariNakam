@extends('template.main')

@section('konten')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Tabel Kriteria Cafe</h4>
                </div>
                <div class="update ml-auto mr-auto">
                    <a href="/tambah_kriteriacafe">
                        <button class="btn btn-primary btn-neutral">
                            Tambah Data
                        </button>
                    </a>
                    <a href="/kriteriacafepdf">
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
                                        ID Kriteria Cafe
                                    </th>
                                    <th>
                                        Nama Kriteria Cafe
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kriteriacafe as $data)
                                    <tr>
                                        <td scope="data">
                                            {{ $data->ID_Kriteria_Cafe }}
                                        </td>
                                        <td>
                                            {{ $data->Nama_Kriteria_Cafe }}
                                        </td>
                                        <td>
                                            <a href="/kriteriacafeEdit/{{ $data->ID_Kriteria_Cafe }}" type="button"
                                                class="btn btn-warning">Edit</a>
                                            <a href="/kriteriacafeDelete/{{ $data->ID_Kriteria_Cafe }}" type="button"
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
