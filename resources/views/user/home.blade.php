@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="container">
    <h1>Selamat Datang di Dashboard Pengguna</h1>
    <div class='container'>
        <a class="btn btn-primary" href="/daftarbuku" role="button">Daftar Buku</a>
    </div>
</div>
@endsection
