@extends('layouts.app')

@section('content')
 <div class="container">
    <h1>Laman Tambah buku</h1>
 </div>

 <div class="container mt-5" style="width: 75%;">
   <form class="mb-4" action="/store" method="POST">
        @csrf
       <h1 class="text-center mb-4">Tambah Buku</h1>
       <div class="form-group">
           <label for="">Nama Buku</label>
           <input type="text" class="form-control" name="nama_buku">
       </div>
       <div class="form-group">
           <label for="">Penulis</label>
           <input type="text" class="form-control" name="nama_penulis">
       </div>
       <div class="form-group">
           <label for="">Penerbit</label>
           <input type="text" class="form-control" name="nama_penerbit">
       </div>
       <div class="form-group">
        <label for="">Tahun Terbit</label>
        <input type="number" class="form-control" name="tahun_terbit">
        </div>
        <div class="form-group">
        <label for="">Jumlah halaman</label>
        <input type="number" class="form-control" name="jumlah_halaman">
        </div>
        <div class="form-group">
        <label for="">Sinopsis</label>
        <input type="text" class="form-control" name="sinopsis">
        </div>
    
        {{-- <div class="form-group"> --}}
            <label for="">Status</label>
            <select type="text" name="Status" class="form-control @error('role') is-invalid @enderror" required>
                <option value="Tersedia">Tersedia</option>
                <option value="Disewa">Disewa</option>
                <option value="Rusak">Rusak</option>
            </select>
        {{-- </div> --}}
       <button type="submit" id="btn-submit" class="btn btn-primary mt-3">Submit</button>
   </form>
</div>
@endsection