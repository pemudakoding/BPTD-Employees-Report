@extends('layouts.default')

@section('title', 'Halaman Laporan')
@section('content')
  <div class="row">
    <div class="col-12 mb-4">
      <a href="{{ route('dashboard.report.create') }}" class="btn btn-primary">Tambah Laporan</a>
    </div>
  </div>
  <div class="row">
    <div class="col-12 mb-4">
      <div class="card">
        <div class="card-header">
          <h4>Laporan</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered table-md">
              @include('includes.alert')
              <tbody>
                <tr>
                  <th>#</th>
                  <th>Judul</th>
                  <th>Status Dinas</th>
                  <th>Action</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Pemasangan Rambu Lalulintas sekitar POSO</td>
                  <td>
                    <span class="badge badge-info">Perjalanan Dinas</span>
                  </td>
                  <td><a href="{{ route('dashboard.report.edit') }}" class="btn btn-secondary">Edit</a><a href="#"
                      class=" ml-2 btn btn-danger">Hapus</a>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Pembuatan Desain Jalur Rambu</td>
                  <td>
                    <span class="badge badge-success">Kantor Induk</span>
                  </td>
                  <td><a href="{{ route('dashboard.report.edit') }}" class="btn btn-secondary">Edit</a><a href="#"
                      class=" ml-2 btn btn-danger">Hapus</a>
                  </td>
                </tr>

              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer text-right">
          <nav class="d-inline-block">
            <ul class="pagination mb-0">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
              </li>
              <li class="page-item active"><a class="page-link" href="#">1 <span
                    class="sr-only">(current)</span></a></li>
              <li class="page-item">
                <a class="page-link" href="#">2</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
@endsection
