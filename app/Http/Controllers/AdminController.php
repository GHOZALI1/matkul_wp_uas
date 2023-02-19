<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class AdminController extends Controller
{
    public function __constructor()
    {
        $this->middleware('admin');
    }

    public function index(){
        return view ('admin.dashboard');
    }
    public function tambahbuku(){
        return view ('admin.tambahbuku');
    }

    public function store(Request $request)
    {
        Buku::create([
            'nama' => $request->nama_buku,
            'penulis' => $request->nama_penulis,
            'penerbit' => $request->nama_penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'jumlah_halaman' => $request->jumlah_halaman,
            'sinopsis' => $request->sinopsis,
            'status' => $request->status
        ]);

        return  back();
    }

    public function editbuku(Request $request){
        if($request->has('search')){
            $Buku = Buku::where('nama', 'LIKE', '%'.$request->search. '%')->paginate(2);
        }else{
            $Buku = Buku::paginate(2);
        }
        
        return view ('admin.editbuku', compact('Buku'));
    }

    public function editdata($id_buku){
        $Buku = Buku::where('id_buku', $id_buku)->first();
        return view ('admin.databuku', compact('Buku'));
    }

    public function update(Request $request, $id_buku)
    {
        Buku::where('id_buku', $id_buku)->update([
            'nama' => $request->nama_buku,
            'penulis' => $request->nama_penulis,
            'penerbit' => $request->nama_penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'jumlah_halaman' => $request->jumlah_halaman,
            'sinopsis' => $request->sinopsis,
            'status' => $request->status
        ]);

        return redirect('/editbuku');
    }
}
