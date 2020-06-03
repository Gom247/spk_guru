<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = "guru";
    protected $fillable = ['user_id', 'kode', 'nama', 'email','jenis_kelamin', 'agama', 'alamat', 'gelar', 'masa_kerja', 'bidang_studi', 'jabatan'];

    public function kriteria()
    {
        return $this->belongsToMany(Kriteria::class);
    }

    public function C1()
    {
        $nilai = 0;

        if ($this->masa_kerja <= 10) {
            $nilai = 1;
        } elseif ($this->masa_kerja <= 20) {
            $nilai = 2;
        } elseif ($this->masa_kerja <= 30) {
            $nilai = 3;
        } elseif ($this->masa_kerja <= 34) {
            $nilai = 4;
        }

        return $nilai;
    }

    public function C2()
    {
        $nilai = 0;

        if ($this->gelar == "D3") {
            $nilai = 1;
        } elseif ($this->gelar == "S1") {
            $nilai = 2;
        } elseif ($this->gelar == "S2") {
            $nilai = 3;
        }

        return $nilai;
    }

}
