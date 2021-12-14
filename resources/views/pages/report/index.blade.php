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
                  <th>Deskripsi</th>
                  <th>Status Dinas</th>
                  <th>Action</th>
                </tr>
                @foreach ($reports as $report)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $report->title }}</td>
                    <td>{{ Str::limit(strip_tags($report->description), 100) }}....</td>
                    <td>
                      @if ($report->service_status === 'Perjalanan Dinas')
                        <span class="badge badge-info">
                        @else
                          <span class="badge badge-success">
                      @endif
                      {{ $report->service_status }}
                      </span>
                    </td>
                    <td><a href="{{ route('dashboard.report.edit', $report->id) }}" class="btn btn-secondary">Edit</a><a
                        href="#" class=" ml-2 btn btn-danger">Hapus</a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer text-right">
          {{ $reports->links() }}
        </div>
      </div>
    </div>
  </div>
@endsection
