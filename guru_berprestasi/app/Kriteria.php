<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    protected $table = "kriteria";
    protected $fillable = ['nama', 'skor'];

    public function guru()
    {
        return $this->belongsToMany(Guru::class)->withPivot([
            'c1', 'c2', 'c3', 'c4', 'c5', 'c6', 'c7', 'c8'])->withTimestamps();
    }
}
