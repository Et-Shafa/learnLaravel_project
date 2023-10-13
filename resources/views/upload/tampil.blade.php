@extends('template')
@section('main')
    <h1>Upload File</h1>
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <form action="{{ route('upload.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label>Example file input</label>
          <input type="file" class="form-control-file" name="image">
        </div>
        <button class="btn btn-success">Submit</button>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td><img src="{{ 'storage/'  . $item->image }}" style="width: 400px;" alt=""></td>
                    {{-- <td>{{ $item->image }}</td> --}}
                    <td>
                        {{-- <a href="{{ route('buku.edit', $item->id) }}" class="btn btn-warning">Edit</a> --}}
                        <form action="{{ route('upload.destroy', $item->id) }}" method="POST">
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
