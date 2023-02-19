@extends('layouts.app')

@section('content')

    <div class='container'>
        <h1>Dashboard Admin</h1>
    </div>

    <div class='container'>
        <a class="btn btn-primary" href="/tambahbuku" role="button">Tambah Buku</a>
        <a class="btn btn-primary" href="/editbuku" role="button">Edit Buku</a>
        <a class="btn btn-primary" href="/editstatus" role="button">Edit status</a>
    </div>

@endsection