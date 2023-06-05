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
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>
                                  USA01
                              </td>
                              <td>
                                  adiahmad08
                              </td>
                              <td>
                                  inipass08
                              </td>
                              <td>
                                  Pembeli
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  USB01
                              </td>
                              <td>
                                  arirama12
                              </td>
                              <td>
                                  akunku12
                              </td>
                              <td>
                                  Pegawai
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  USA02
                              </td>
                              <td>
                                  alifal06
                              </td>
                              <td>
                                  alalif06
                              </td>
                              <td>
                                  Pembeli
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  USB02
                              </td>
                              <td>
                                  alirahmat71
                              </td>
                              <td>
                                  rahmat71
                              </td>
                              <td>
                                  Pegawai
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  USA03
                              </td>
                              <td>
                                  sarah07
                              </td>
                              <td>
                                  inisarah07
                              </td>
                              <td>
                                  Pembeli
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  USB03
                              </td>
                              <td>
                                  Tiandini11
                              </td>
                              <td>
                                  punyatia11
                              </td>
                              <td>
                                  Pegawai
                              </td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection