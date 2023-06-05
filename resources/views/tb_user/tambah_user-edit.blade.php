@extends('template.main')

@section('konten')
    <div class="col-md-8">
        <div class="card card-user">
            <div class="card-header">
                <h8 class="card-title">Edit Profile</h8>
            </div>
            <div class="card-body">
                <form action="/userUpdate/{{ $user->ID_User }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-4 pr-1">
                            <div class="form-group">
                                <label for="exampleInputEmail1">ID User</label>
                                <input type="text" name="ID_User" class="form-control" placeholder="ID"
                                    value="{{ $user->ID_User }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 pr-1">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="Username" class="form-control" placeholder="Username"
                                    value="{{ $user->Username }}">
                            </div>
                        </div>
                        <div class="col-md-4 pl-1">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" name="Password" class="form-control" placeholder="Password"
                                    value="{{ $user->Password }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Pilihan" class="form-label">Status User</label>
                                <select class="form-select" name="Pilihan" id="Pilihan"
                                    aria-label="Default select example">
                                    @switch($user->Pilihan)
                                        @case('Pegawai')
                                            <option value="Pegawai">Pegawai</option>
                                            <option value="Pembeli">Pembeli</option>
                                        @break

                                        @case('Pembeli')
                                            <option value="Pembeli">Pembeli</option>
                                            <option value="Pegawai">Pegawai</option>
                                        @break
                                    @endswitch
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="update ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary btn-round">Edit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
