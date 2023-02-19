@extends('layouts.app')

@section('content')
 <div class="container">
    <h1>Detail Buku</h1>
 </div>

 <div class="container mt-5" style="width: 75%;">
    <div class="form-group">
        <label for="">Nama Buku</label>
        <h1>{{$Buku->nama}}</h1>
    </div>
    <div class="form-group">
        <label for="">Penulis</label>
        <h1>{{$Buku->penulis}}</h1>
    </div>
    <div class="form-group">
        <label for="">Penerbit</label>
        <h1>{{$Buku->penerbit}}</h1>
    </div>
    <div class="form-group">
     <label for="">Tahun Terbit</label>
     <h1>{{$Buku->tahun_terbit}}</h1>
    </div>
     <div class="form-group">
     <label for="">Jumlah halaman</label>
     <h1>{{$Buku->jumlah_halaman}}</h1>
    </div>
     <div class="form-group">
     <label for="">Sinopsis</label>
     <p>{{$Buku->sinopsis}}</p>
    </div>
     
     <div class="form-group">
         <label for="">Status (Tersedia / Rusak / Disewa)</label>
         <h1>{{$Buku->status}}</h1>
    </div>  
</div>
@endsection