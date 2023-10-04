@extends('template')
@section('main')
    <h1>Tambah Buku</h1>
    <form action="{{ route('buku.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Nama Buku</label>
            <input type="text" class="form-control" name="namabuku">
        </div>
        <div class="form-group">
            <label>Deskripsi</label>
            <input type="textarea" class="form-control" name="deskripsi">
        </div>
        <div class="form-group">
            <label>Pencipta</label>
            <input type="text" class="form-control" name="pencipta">
        </div>
        <div class="form-group">
            <label>Tahun Terbit</label>
            <input type="text" class="form-control" name="tahunterbit">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
