<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('user.home');
    }

    public function sewa()
    {
        return view('user.sewa');
    }

    public function daftarbuku(Request $request){
        if($request->has('search')){
            $Buku = Buku::where('nama', 'LIKE', '%'.$request->search. '%')->paginate(2);
        }else{
            $Buku = Buku::paginate(2);
        }
        return view('user.daftarbuku', compact('Buku'));
    }

    public function detailbuku($id_buku){
        $Buku = Buku::where('id_buku', $id_buku)->first();
        return view ('user.detailbuku', compact('Buku'));
    }
}
