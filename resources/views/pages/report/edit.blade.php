@extends('layouts.default')

@section('title', 'Halaman Edit Laporan')
@section('content')
  <div class="row">
    <div class="col-12 mb-4">
      <div class="card">
        <div class="card-header">
          <h4>Laporan</h4>
        </div>
        <div class="card-body">
          <form action="{{ route('dashboard.report.update', $activityReport->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Judul Laporan</label>
              <div class="col-sm-12 col-md-7">
                <input type="text" class="form-control" name="title" value="{{ $activityReport->title ?? '' }}">
                @error('title')
                  <p class="text-danger m-0">{{ $message }}</p>
                @enderror
              </div>

            </div>
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status Dinas</label>
              <div class="col-sm-12 col-md-7">
                <div class="selectric-wrapper selectric-form-control selectric-selectric">
                  <div class="selectric-hide-select">
                    <select class="form-control selectric" tabindex="-1" name="service_status">
                      <option value="">Pilih Status Dinas</option>
                      <option value="Perjalanan Dinas"
                        {{ $activityReport->service_status == 'Perjalanan Dinas' ? 'selected' : '' }}>Perjalanan Dinas
                      </option>
                      <option value="Kantor Induk"
                        {{ $activityReport->service_status == 'Kantor Induk' ? 'selected' : '' }}>
                        Kantor Induk</option>
                    </select>
                    @error('service_status')
                      <p class="text-danger m-0">{{ $message }}</p>
                    @enderror
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>
              <div class="col-sm-12 col-md-7">
                <textarea class="summernote-simple" style="display: none;"
                  name="description">{{ $activityReport->description ?? '' }}</textarea>

                @error('description')
                  <p class="text-danger m-0">{{ $message }}</p>
                @enderror
              </div>
            </div>
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
              <div class="col-sm-12 col-md-7">
                <button class="btn btn-primary">Simpan</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
@push('styles')
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

@endpush
@push('afterScripts')
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

@endpush
