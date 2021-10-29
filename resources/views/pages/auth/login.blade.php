@extends('layouts.auth')

@section('content')
  <section class="section">
    <div class="d-flex flex-wrap align-items-stretch">
      <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
        <div class="p-4 m-3">
          <img src="{{ asset('img/stisla-fill.svg') }}" alt="logo" width="80"
            class="shadow-light rounded-circle mb-5 mt-2">
          <h4 class="text-dark font-weight-normal">Welcome to <span class="font-weight-bold">Lakase Report</span></h4>
          <p class="text-muted">Sebelum kamu mulai mengakses, kamu harus login terdahulu.</p>

          <form method="POST" action="{{ route('login') }} " class="needs-validation" novalidate="">
            @csrf

            <div class="form-group">
              <label for="nip">NIP</label>
              <input id="nip" type="text" class="form-control" name="nip" tabindex="1" required autofocus>
              <div class="invalid-feedback">
                Silahkan inputkan NIP anda
              </div>
              @if ($errors->has('nip'))
                <div class="text-danger">
                  {{ $errors->first('nip') }}
                </div>
              @endif
            </div>

            <div class="form-group">
              <div class="d-block">
                <label for="password" class="control-label">Password</label>
              </div>
              <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
              <div class="invalid-feedback">
                Silahkan inputkan Password anda
              </div>
              @if ($errors->has('password'))
                <div class="text-danger">
                  {{ $errors->first('password') }}
                </div>
              @endif
            </div>

            <div class="form-group">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                <label class="custom-control-label" for="remember-me">Remember Me</label>
              </div>
            </div>

            <div class="form-group text-right">
              <a href="auth-forgot-password.html" class="float-left mt-3">
                Forgot Password?
              </a>
              <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
                Login
              </button>
            </div>


          </form>

          <div class="text-center mt-5 text-small">
            Copyright &copy; Your Company. Made with 💙 by Stisla
          </div>
        </div>
      </div>
      <div
        class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom"
        data-background="{{ asset('img/office.jpg') }}">
        <div class="absolute-bottom-left index-2">
          <div class="text-light p-5 pb-2">
            <div class="mb-5 pb-3">
              <h1 class="mb-2 display-4 font-weight-bold">Good Morning</h1>
              <h5 class="font-weight-normal text-muted-transparent">Palu, Kantor Induk</h5>
            </div>
            Photo by Rahman Lakase
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
