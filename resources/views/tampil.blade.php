@extends('template')
@section('main')
    <a href="{{ route('buku.create') }}" class="btn btn-primary">Tambah Data</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Buku</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Pencipta</th>
                <th scope="col">Tahun Terbit</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->namabuku }}</td>
                    <td>{{ $item->deskripsi }}</td>
                    <td>{{ $item->pencipta }}</td>
                    <td>{{ $item->tglterbit }}</td>
                    <td>
                        <a href="{{ route('buku.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('buku.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">Delete</button>
                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
