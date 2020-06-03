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
                            <h3>Guru</h3>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>Kode</th>
                                            <th>Gelar</th>
                                            <th>Nama</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Agama</th>
                                            <th>Masa Kerja</th>
                                            <th>Jabatan</th>
                                            <th colspan="3">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($guru as $gr)
                                        <tr>
                                            <td>{{ $gr->kode }}</td>
                                            <td>{{ $gr->gelar }}</td>
                                            <td>{{ $gr->nama }}</td>
                                            <td>{{ $gr->jenis_kelamin }}</td>
                                            <td>{{ $gr->agama }}</td>
                                            <td>{{ $gr->masa_kerja }}</td>
                                            <td>{{ $gr->jabatan }}</td>
                                            <td><a href="{{ route('guru.nilai', $gr->id) }}" class="btn btn-primary">Nilai</a></td>
                                            <td><a href="{{ route('guru.edit', $gr->id) }}" class="btn btn-warning">Edit</a></td>
                                            <td><a href="{{ route('guru.delete', $gr->id) }}" class="btn btn-danger">Delete</a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $guru->links() }}
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h3>Input Guru</h3>
                        </div>
                        <div class="panel-body">
                            <form action="{{ route('guru.create') }}" enctype="multipart/form-data" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="">Kode</label>
                                    <input type="text" name="kode" class="form-control" placeholder="Kode" id="">
                                </div>
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" name="nama" class="form-control" placeholder="Nama" id="">
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email" id="">
                                </div>
                                <div class="form-group">
                                    <label for="">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" class="form-control" id="">
                                        <option value="-">---</option>
                                        <option value="L">Laki-Laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Agama</label>
                                    <select name="agama" class="form-control" id="">
                                        <option value="-">---</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Budha">Budha</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <textarea name="alamat" class="form-control" cols="30" rows="10"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Gelar</label>
                                    <select name="gelar" class="form-control" id="">
                                        <option value="-">---</option>
                                        <option value="D3">D3</option>
                                        <option value="S1">S1</option>
                                        <option value="S2">S2</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Masa Kerja</label>
                                    <input type="text" name="masa_kerja" class="form-control" placeholder="Angka" id="">
                                </div>
                                <div class="form-group">
                                    <label for="">Bidang Studi</label>
                                    <input type="text" name="bidang_studi" class="form-control" placeholder="Bidang Studi" id="">
                                </div>
                                <div class="form-group">
                                    <label for="">Jabatan</label>
                                    <select name="jabatan" class="form-control" id="">
                                        <option value="-">---</option>
                                        <option value="Kepala Sekolah">Kepala Sekolah</option>
                                        <option value="TU">TU</option>
                                        <option value="Guru">Guru</option>
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
