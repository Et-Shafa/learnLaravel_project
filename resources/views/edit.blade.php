@extends('template')
@section('main')
    <h1>Edit Buku</h1>
    <form action="{{ route('buku.update', $data->id) }}" method="POST">
        @csrf
        @method('put')
        <div class="form-group">
            <label>Nama Buku</label>
            <input type="text" class="form-control" name="namabuku" value="{{ $data->namabuku }}">
        </div>
        <div class="form-group">
            <label>Deskripsi</label>
            <input type="textarea" class="form-control" name="deskripsi" value="{{ $data->deskripsi }}">
        </div>
        <div class="form-group">
            <label>Pencipta</label>
            <input type="text" class="form-control" name="pencipta" value="{{ $data->pencipta }}">
        </div>
        <div class="form-group">
            <label>Tahun Terbit</label>
            <input type="text" class="form-control" name="tahunterbit" value="{{ $data->tglterbit }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
