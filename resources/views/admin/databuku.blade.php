@extends('layouts.app')

@section('content')
 <div class="container">
    <h1>Laman Data Buku</h1>
 </div>

 <div class="container mt-5" style="width: 75%;">
   <form class="mb-4" action="/update/{{$Buku->id_buku}}" method="POST">
        @csrf
        @method('PATCH')
       <h1 class="text-center mb-4">Tambah Buku</h1>
       <div class="form-group">
           <label for="">Nama Buku</label>
           <input value="{{$Buku->nama}}" type="text" class="form-control" name="nama_buku">
       </div>
       <div class="form-group">
           <label for="">Penulis</label>
           <input value="{{$Buku->penulis}}" type="text" class="form-control" name="nama_penulis">
       </div>
       <div class="form-group">
           <label for="">Penerbit</label>
           <input  value="{{$Buku->penerbit}}" type="text" class="form-control" name="nama_penerbit">
       </div>
       <div class="form-group">
        <label for="">Tahun Terbit</label>
        <input value="{{$Buku->tahun_terbit}}" type="number" class="form-control" name="tahun_terbit">
        </div>
        <div class="form-group">
        <label for="">Jumlah halaman</label>
        <input value="{{$Buku->jumlah_halaman}}" type="number" class="form-control" name="jumlah_halaman">
        </div>
        <div class="form-group">
        <label for="">Sinopsis</label>
        <input value="{{$Buku->sinopsis}}"type="text" class="form-control" name="sinopsis">
        </div>
        
        <div class="form-group">
            <label for="">Status (Tersedia / Rusak / Disewa)</label>
            <input value="{{$Buku->status}}"type="text" class="form-control" name="status">
            </div>
        {{-- <div class="form-group"> --}}
            {{-- <label for="">Status</label>
            <select type="text" name="Status" class="form-control @error('role') is-invalid @enderror" required>
                <option value="Tersedia">Tersedia</option>
                <option value="Disewa">Disewa</option>
                <option value="Rusak">Rusak</option>
            </select> --}}
        {{-- </div> --}}
       <button type="submit" id="btn-submit" class="btn btn-primary mt-3">Edit</button>
   </form>
</div>
@endsection