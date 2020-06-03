@extends('layout.master_dashboard')

@section('tittle')
Kriteria
@endsection

@section('main')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3>Kriteria</h3>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Skor</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($kriteria as $kta)
                                        <tr>
                                            <td>{{ $kta->nama }}</td>
                                            <td>{{ $kta->skor }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h3>Input Kriteria</h3>
                        </div>
                        <div class="panel-body">
                            <form action="{{ route('kriteria.input') }}" enctype="multipart/form-data" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" name="nama" class="form-control" id="">
                                </div>
                                <div class="form-group">
                                    <label for="">Skor</label>
                                    <input type="text" name="skor" class="form-control" id="">
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
