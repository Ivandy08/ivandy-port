@extends('admin/admin_kerangka')
@section('title') Portfolio @endsection
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Hoverable Table</h4>
                    <p class="card-description"> Add class <code>.table-hover</code>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Kategori</th>
                            <th>Gambar</th>
                            <th>Web URL</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Jacob</td>
                            <td>Photoshop</td>
                            <td>Web</td>
                            <td>Isi Gambar</td>
                            <td>www.google.com</td>
                            <td class="text-danger"> 28.76% <i class="mdi mdi-arrow-down"></i></td>
                            <td><label class="badge badge-danger">Pending</label></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
@endsection