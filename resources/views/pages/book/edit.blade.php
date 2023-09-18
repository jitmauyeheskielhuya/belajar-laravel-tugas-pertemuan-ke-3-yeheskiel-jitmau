@extends('layout.app')

@section('content')
  <div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">Edit BUku</h1>
    {{-- <a href="{{ route('book.create') }}" class="btn btn-primary">Add Book</a> --}}
  </div>
  <hr />

  <form action="{{ route('book.update', $book->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="row mb-3">
      <div class="col">
        <label">Nama Buku</label>
        <input type="text" name="name" class="form-control" placeholder="Nama Buku" value="{{ $book->name }}">
      </div>
      <div class="col">
        <label">Pengarang</label>
        <input type="text" name="autohor" class="form-control" placeholder="Pengarang" value="{{ $book->autohor }}">
      </div>
    </div>
    <div class="row mb-3">
      <div class="col">
        <label">Tahun</label>
        <input type="text" name="year" class="form-control" placeholder="Tahun" value="{{ $book->year }}">
      </div>
      <div class="col">
        <label">Deskripsi</label>
        <textarea name="description" class="form-control" placeholder="Deskripsi">{{ $book->description }}</textarea>
      </div>
    </div>
    <div class="row">
      <div class="d-grid">
        <button class="btn btn-warning">Edit</button>
      </div>
    </div>
</form>
@endsection