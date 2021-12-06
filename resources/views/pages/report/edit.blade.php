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
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Judul Laporan</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status Dinas</label>
            <div class="col-sm-12 col-md-7">
              <div class="selectric-wrapper selectric-form-control selectric-selectric">
                <div class="selectric-hide-select"><select class="form-control selectric" tabindex="-1">
                    <option>Perjalanan Dinas</option>
                    <option>Dinas Kantor</option>
                  </select></div>
              </div>
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>
            <div class="col-sm-12 col-md-7">
              <textarea class="summernote-simple" style="display: none;"></textarea>
              <div class="note-editor note-frame card">
                <div class="note-dropzone">
                  <div class="note-dropzone-message"></div>
                </div>
                <div class="note-toolbar card-header" role="toolbar">
                  <div class="note-btn-group btn-group note-style"><button type="button"
                      class="note-btn btn btn-light btn-sm note-btn-bold" role="button" tabindex="-1" title=""
                      aria-label="Bold (CTRL+B)" data-original-title="Bold (CTRL+B)"><i
                        class="note-icon-bold"></i></button><button type="button"
                      class="note-btn btn btn-light btn-sm note-btn-italic" role="button" tabindex="-1" title=""
                      aria-label="Italic (CTRL+I)" data-original-title="Italic (CTRL+I)"><i
                        class="note-icon-italic"></i></button><button type="button"
                      class="note-btn btn btn-light btn-sm note-btn-underline" role="button" tabindex="-1" title=""
                      aria-label="Underline (CTRL+U)" data-original-title="Underline (CTRL+U)"><i
                        class="note-icon-underline"></i></button><button type="button"
                      class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title=""
                      aria-label="Remove Font Style (CTRL+\)" data-original-title="Remove Font Style (CTRL+\)"><i
                        class="note-icon-eraser"></i></button></div>
                  <div class="note-btn-group btn-group note-font"><button type="button"
                      class="note-btn btn btn-light btn-sm note-btn-strikethrough" role="button" tabindex="-1" title=""
                      aria-label="Strikethrough (CTRL+SHIFT+S)" data-original-title="Strikethrough (CTRL+SHIFT+S)"><i
                        class="note-icon-strikethrough"></i></button></div>
                  <div class="note-btn-group btn-group note-para">
                    <div class="note-btn-group btn-group"><button type="button"
                        class="note-btn btn btn-light btn-sm dropdown-toggle" role="button" tabindex="-1"
                        data-toggle="dropdown" title="" aria-label="Paragraph" data-original-title="Paragraph"><i
                          class="note-icon-align-left"></i></button>
                      <div class="dropdown-menu" role="list">
                        <div class="note-btn-group btn-group note-align"><button type="button"
                            class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title=""
                            aria-label="Align left (CTRL+SHIFT+L)" data-original-title="Align left (CTRL+SHIFT+L)"><i
                              class="note-icon-align-left"></i></button><button type="button"
                            class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title=""
                            aria-label="Align center (CTRL+SHIFT+E)" data-original-title="Align center (CTRL+SHIFT+E)"><i
                              class="note-icon-align-center"></i></button><button type="button"
                            class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title=""
                            aria-label="Align right (CTRL+SHIFT+R)" data-original-title="Align right (CTRL+SHIFT+R)"><i
                              class="note-icon-align-right"></i></button><button type="button"
                            class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title=""
                            aria-label="Justify full (CTRL+SHIFT+J)" data-original-title="Justify full (CTRL+SHIFT+J)"><i
                              class="note-icon-align-justify"></i></button></div>
                        <div class="note-btn-group btn-group note-list"><button type="button"
                            class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title=""
                            aria-label="Outdent (CTRL+[)" data-original-title="Outdent (CTRL+[)"><i
                              class="note-icon-align-outdent"></i></button><button type="button"
                            class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title=""
                            aria-label="Indent (CTRL+])" data-original-title="Indent (CTRL+])"><i
                              class="note-icon-align-indent"></i></button></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="note-editing-area">
                  <div class="note-handle">
                    <div class="note-control-selection">
                      <div class="note-control-selection-bg"></div>
                      <div class="note-control-holder note-control-nw"></div>
                      <div class="note-control-holder note-control-ne"></div>
                      <div class="note-control-holder note-control-sw"></div>
                      <div class="note-control-sizing note-control-se"></div>
                      <div class="note-control-selection-info"></div>
                    </div>
                  </div><textarea class="note-codable" role="textbox" aria-multiline="true"></textarea>
                  <div class="note-editable card-block" contenteditable="true" role="textbox" aria-multiline="true"
                    spellcheck="true" style="min-height: 150px;">
                    <p><br></p>
                  </div>
                </div><output class="note-status-output" aria-live="polite"></output>
                <div class="note-statusbar" role="status"> <output class="note-status-output" aria-live="polite"></output>
                  <div class="note-resizebar" role="seperator" aria-orientation="horizontal" aria-label="Resize">
                    <div class="note-icon-bar"></div>
                    <div class="note-icon-bar"></div>
                    <div class="note-icon-bar"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
            <div class="col-sm-12 col-md-7">
              <button class="btn btn-primary">Simpan</button>
            </div>
          </div>
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
