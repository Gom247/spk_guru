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
                            <h3>Nilai</h3>
                        </div>
                        <div class="panel-body">
                            <form action="{{ route('guru.nilai_guru', $guru->id) }}" enctype="multipart/form-data"
                                method="POST">
                                {{ csrf_field() }}
                                <input type="text" name="guru_id" value="{{ $guru->id }}" id="" hidden>
                                <div class="form-group">
                                    <label for="">Masa Kerja</label>
                                    <select name="c1" class="form-control" id="">
                                        <option value="0">---</option>
                                        <option value="{{ $guru->C1() }}">{{ $guru->masa_kerja }} th</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Pendidikan Terakhir</label>
                                    <select name="c2" class="form-control" id="">
                                        <option value="0">---</option>
                                        <option value="{{ $guru->C2() }}">{{ $guru->gelar }}</option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Kinerja</label>
                                    <select name="kriteria_id" class="form-control" id="">
                                        @foreach($kriteria as $kta)
                                        <option value="{{ $kta->id }}">{{ $kta->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Kedisiplinan</label>
                                    <select name="kriteria_id" class="form-control" id="">
                                        @foreach($kriteria as $kta)
                                        <option value="{{ $kta->id }}">{{ $kta->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Pembinaan Siswa</label>
                                    <select name="kriteria_id" class="form-control" id="">
                                        @foreach($kriteria as $kta)
                                        <option value="{{ $kta->id }}">{{ $kta->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Menghasilkan Murid Berprestasi</label>
                                    <select name="kriteria_id" class="form-control" id="">
                                        @foreach($kriteria as $kta)
                                        <option value="{{ $kta->id }}">{{ $kta->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Pelatihan</label>
                                    <select name="kriteria_id" class="form-control" id="">
                                        @foreach($kriteria as $kta)
                                        <option value="{{ $kta->id }}">{{ $kta->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Inovasi Pembelajaran</label>
                                    <select name="kriteria_id" class="form-control" id="">
                                        @foreach($kriteria as $kta)
                                        <option value="{{ $kta->id }}">{{ $kta->nama }}</option>
                                        @endforeach
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