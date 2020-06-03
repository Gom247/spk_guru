<?php

namespace App\Http\Controllers;

use App\Guru;
use App\Kriteria;
use App\Nilai;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GuruController extends Controller
{
    public function index()
    {
        $guru = Guru::paginate(10);

        return view('guru.index', compact(['guru']));
    }

    public function create(Request $request)
    {
        $user = new User;
        $user->role = $request->jabatan;
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->password = bcrypt('123456');
        $user->remember_token = Str::random(60);
        $user->save();

        $request->request->add(['user_id' => $user->id]);
        Guru::create($request->all());

        return redirect()->back();
    }

    public function edit($id)
    {
        $guru = Guru::find($id);

        return view('guru.edit', compact(['guru']));
    }

    public function update($id, Request $request)
    {
        $guru = Guru::find($id);
        $guru->update($request->all());
        $user = User::where('id', $guru->user_id);
        $user->update([
            'name' => $request->nama,
            'email' => $request->email,
        ]);

        return redirect('/data_guru');
    }

    public function delete($id)
    {
        $guru = Guru::find($id);
        $guru->delete($guru);
        $user = User::where('id', $guru->user_id);
        $user->delete($user);

        return redirect()->back();
    }

    public function nilai($id, Request $request)
    {
        $guru = Guru::find($id);
        $kriteria = Kriteria::all();

        return view('guru.nilai', compact(['guru', 'kriteria']));
    }

    public function nilaiguru($id, Request $request)
    {
        
    }
}
