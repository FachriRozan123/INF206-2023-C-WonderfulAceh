<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TempatWisata;
use Illuminate\Support\Facades\DB;

class TempatWisataController extends Controller
{   
    public function index()
    {
        //
        $tempat_wisata=DB::table('tempat_wisata')->get();
            return view('holiday.index')
            ->with('tempat_wisata',$tempat_wisata);
    }
    public function create()
    {
        return view('holiday.addTempat');
    }
    public function store(Request $request)
    {
       if($request->file('image')){
            $link = 'img/'.time().'-'.$request->image->getClientOriginalName();
            $request->image->move('storage/img', $link);
       }
        TempatWisata::create([
            'nama_tempat'=>$request['nama_tempat'],
            'alamat'=>$request['alamat'],
            'nama_pemilik'=>$request['nama_pemilik'],
            'nomor_pemilik'=>$request['nomor_pemilik'],
            'kategori'=>$request['kategori'],
            'deskripsi'=>$request['deskripsi'],
            'image'=>$link
        ]);
        return redirect('/');
    }

}
