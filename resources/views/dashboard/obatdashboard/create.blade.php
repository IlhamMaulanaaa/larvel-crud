@extends('admin.index')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h3 align="center" class=" text-light">Tambah Data Obat</h3>
                <br>
                <div class="card bg-light">
                    <div class="card-body">
                        <form method="post" action="/obat/add ">
                            @csrf
                            <div class="form-group">
                                <label for="" class="form-label">Nama Obat</label>
                                <input class="form-control" id="nama_obat" name="nama_obat"value="{{ old('nama_obat') }}">
                            </div>

                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">nama pabrik</label>
                                <select class="form-select" name="pabrik_id" id="pabrik_id">
                                    @foreach ($pabrik as $pabriks)
                                        <option value="{{ $pabriks->id }}">{{ $pabriks->nama_pabrik }}</option>
                                    @endforeach
                                </select>
                                {{-- <input doctor="form-control"id="kode_pasien" name="kode_pasien" value="{{ $siswa->kelas->kelas }}"> --}}
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Merek Obat</label>
                                <input class="form-control" id="merek_obat"
                                    name="merek_obat"value="{{ old('merek_obat') }}">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Tanggal</label>
                                <input type="date" class="form-control" id="tanggal_kadaluarsa" name="tanggal_kadaluarsa"
                                    value="{{ old('tanggal_kadaluarsa') }}">
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
