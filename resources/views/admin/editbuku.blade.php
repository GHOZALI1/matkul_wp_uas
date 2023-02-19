@extends('layouts.app')

@section('content')
 <div class="container">
    <h1>Laman Edit buku</h1>
 </div>

 <div class="container mt-5" style="width: 75%;">
   {{-- <form class="mb-4">
       <h1 class="text-center mb-4">Edit Buku</h1>
       <div class="form-group">
           <label for="">Nama Buku</label>
           <input type="text" class="form-control">
       </div>
       <button type="submit" id="btn-submit" class="btn btn-primary mt-3">Submit</button>
   </form> --}}
   
   <form action="/editbuku" method="GET">
    <input class="form-control" type="text" name="search" placeholder="Masukkan Nama Buku">
    </form>
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
                        <td><a href="/databuku/{{$buku->id_buku}}" class="btn btn-success">Edit</a> 
                            <button type="submit" class="btn btn-danger">Delete</button></td>
                        
                    </tr>
                @endforeach
                
            </tbody>
        </table>
        {{$Buku->links()}}
    </div>  
</div>
@endsection