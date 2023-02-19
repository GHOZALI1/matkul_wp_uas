@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Daftar Buku Perpustakaan</h1>

    <div class="container mt-5">
        <h1>Product List</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Buku</th>
                    <th>Nama Penulis</th>
                    <th>Nama Penerbit</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Buku as $buku)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$buku->nama}}</td>
                        <td>{{$buku->penulis}}</td>
                        <td>{{$buku->penerbit}}</td>
                        <td>{{$buku->status}}</td>
                        <td><a href="/detailbuku/{{$buku->id_buku}}" class="btn btn-success">Detail</a>
                            <a href="/sewa" class="btn btn-primary">Sewa</a>
                        </td>
                        
                    </tr>
                @endforeach
                
            </tbody>
        </table>
        {{$Buku->links()}}
    </div>  
</div>
@endsection