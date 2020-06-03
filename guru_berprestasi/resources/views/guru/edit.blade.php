@extends('layout.master_dashboard')

@section('tittle')
Guru
@endsection

@section('main')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3>Edit Guru</h3>
                        </div>
                        <div class="panel-body">
                            <form action="{{ route('guru.update', $guru->id) }}" enctype="multipart/form-data" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="">Kode</label>
                                    <input type="text" name="kode" class="form-control" value="{{ $guru->kode }}" id="">
                                </div>
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" name="nama" class="form-control" value="{{ $guru->nama }}" id="">
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" name="email" class="form-control" value="{{ $guru->email }}" id="">
                                </div>
                                <div class="form-group">
                                    <label for="">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" class="form-control" id="">
                                        <option value="-">---</option>
                                        <option value="L" @if($guru->jenis_kelamin == 'L') selected @endif >Laki-Laki</option>
                                        <option value="P" @if($guru->jenis_kelamin == 'P') selected @endif >Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Agama</label>
                                    <select name="agama" class="form-control" id="">
                                        <option value="-">---</option>
                                        <option value="Islam" @if($guru->agama == 'Islam') selected @endif >Islam</option>
                                        <option value="Kristen" @if($guru->agama == 'Kristen') selected @endif >Kristen</option>
                                        <option value="Katolik" @if($guru->agama == 'Katolik') selected @endif >Katolik</option>
                                        <option value="Budha" @if($guru->agama == 'Budha') selected @endif >Budha</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <textarea name="alamat" class="form-control" cols="30" rows="10">{{ $guru->alamat }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Gelar</label>
                                    <select name="gelar" class="form-control" id="">
                                        <option value="-">---</option>
                                        <option value="D3" @if($guru->gelar == 'D3') selected @endif >D3</option>
                                        <option value="S1" @if($guru->gelar == 'S1') selected @endif >S1</option>
                                        <option value="S2" @if($guru->gelar == 'S2') selected @endif >S2</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Masa Kerja</label>
                                    <input type="text" name="masa_kerja" class="form-control" value="{{ $guru->masa_kerja }}" id="">
                                </div>
                                <div class="form-group">
                                    <label for="">Bidang Studi</label>
                                    <input type="text" name="bidang_studi" class="form-control" value="{{ $guru->bidang_studi }}" id="">
                                </div>
                                <div class="form-group">
                                    <label for="">Jabatan</label>
                                    <select name="jabatan" class="form-control" id="">
                                        <option value="-">---</option>
                                        <option value="Kepala Sekolah" @if($guru->jabatan == 'Kepala Sekolah') selected @endif >Kepala Sekolah</option>
                                        <option value="TU" @if($guru->jabatan == 'TU') selected @endif >TU</option>
                                        <option value="Guru" @if($guru->jabatan == 'Guru') selected @endif >Guru</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary" type="submit">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
