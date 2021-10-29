@extends('layouts.default')

@section('title', 'Halaman Dashboard')
@section('content')
  <div class="row">
    <div class="col-12 mb-4">
      <div class="hero bg-primary text-white">
        <div class="hero-inner">
          <h2>Welcome Back, {{ Auth::user()->name }}</h2>
          <p class="lead">Jangan lupa istirahat, bekerja tanpa istirahat bisa membuat kesehatan kamu memburuk.
          </p>
        </div>
      </div>
    </div>
  </div>
@endsection