<?php

namespace App\Http\Controllers;

use App\Models\Nasabah;
use Illuminate\Http\Request;

class NasabahController extends Controller
/**
 * @return \Illuminate\Http\Response
 */
{
    public function index(){
        //fungsi eloquent menampilkan data menggunakan pagination
        $nasabah = Nasabah::all(); // Mengambil semua isi tabel
        $posts = Nasabah::orderBy('No_Rekening', 'desc')->paginate(6);
        return view('nasabah.index', compact('nasabah'))->with('i', (request()->input('page', 1) - 1) * 5);
 }
}
