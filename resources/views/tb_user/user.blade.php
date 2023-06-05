@extends('template.main')

@section('konten')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tabel User</h4>
                </div>
                <div class="update ml-auto mr-auto">
                    <a href="/userCreate">
                        <button class="btn btn-primary btn-neutral">
                            Tambah Data
                        </button>
                    </a>
                    <a href="/userPDF">
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
                                        Username
                                    </th>
                                    <th>
                                        Password
                                    </th>
                                    <th>
                                        Status User
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $data)
                                    <tr>
                                        <td scope="data">
                                            {{ $data->ID_User }}
                                        </td>
                                        <td>
                                            {{ $data->Username }}
                                        </td>
                                        <td>
                                            {{ $data->Password }}
                                        </td>
                                        <td>
                                            {{ $data->Pilihan }}
                                        </td>
                                        <td>
                                
                                            <a href="/userEdit/{{ $data->ID_User }}" type="button"
                                                class="btn btn-warning">Edit</a>
                                            <a href="/userDelete/{{ $data->ID_User }}" type="button"
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
