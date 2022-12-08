@extends('layout.main')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h3 align="center" class=" text-light">Edit Data Obat</h3>
                <br>
                <div class="card bg-light">
                    <div class="card-body">
                        <form method="post" action="/obat/update/ {{ $obat->id }}">
                            @csrf
                            
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Nama Obat</label>
                                <input class="form-control" id="nama_obat"
                                    name="nama_obat"value="{{ old('nama_obat', $obat->nama_obat) }}" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Alamat</label>
                                <input class="form-control" id="merek_obat"
                                name="merek_obat"value="{{ old('merek_obat', $obat->merek_obat) }}" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Tanggal</label>
                                <input class="form-control" id="tanggal_kadaluarsa" type="date"
                                name="tanggal_kadaluarsa"value="{{ old('tanggal_kadaluarsa', $obat->tanggal_kadaluarsa) }}" required>
                            </div>
                            <br>
                            <div class="float-end">
                                <a type="button" class="btn btn-warning" href="/obat/all">Back</a>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection