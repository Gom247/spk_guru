<?php

namespace App\Http\Controllers;

use App\Kriteria;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index()
    {
        

        return view('nilai.index');
    }

    public function kriteria()
    {
        $kriteria = Kriteria::paginate(10);

        return view('nilai.kriteria', compact(['kriteria']));
    }

    public function kriteriainput(Request $request)
    {
        Kriteria::create($request->all());

        return redirect()->back();
    }
}
