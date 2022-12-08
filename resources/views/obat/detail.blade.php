@extends('layout.main')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h3 align="center" class=" text-light">Detail Data</h3>
                <br>
                <div class="card bg-light">
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="" class="form-label">Nama Obat</label>
                                <input class="form-control"value="{{ $obat->nama_obat }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Merek</label>
                                <input class="form-control"value="{{ $obat->merek_obat }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Tanggal</label>
                                <input class="form-control" value="{{ $obat->tanggal_kadaluarsa }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <a type="button" class="btn btn-warning" href="/obat/all">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div @endsection
