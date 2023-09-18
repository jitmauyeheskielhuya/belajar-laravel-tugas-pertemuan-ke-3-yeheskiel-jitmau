@extends('layout.app')

@section('content')
  <div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">Detail BUku</h1>
    {{-- <a href="{{ route('book.create') }}" class="btn btn-primary">Add Book</a> --}}
  </div>
  <hr />

  <div class="row mb-3">
    <div class="col">
      <label">Nama Buku</label>
      <input type="text" name="name" class="form-control" placeholder="Nama Buku" value="{{ $book->name }}" readonly>
    </div>
    <div class="col">
      <label">Pengarang</label>
      <input type="text" name="autohor" class="form-control" placeholder="Pengarang" value="{{ $book->autohor }}" readonly>
    </div>
  </div>
  <div class="row mb-3">
    <div class="col">
      <label">Tahun</label>
      <input type="text" name="year" class="form-control" placeholder="Tahun" value="{{ $book->year }}" readonly>
    </div>
    <div class="col">
      <label">Deskripsi</label>
      <textarea name="description" class="form-control" placeholder="Deskripsi" readonly>{{ $book->description }}</textarea>
    </div>
  </div>
  <div class="row mb-3">
    <div class="col">
      <label for="">Created at</label>
      <input type="text" name="created_at" class="form-control" placeholder="Created_at" value="{{ $book->created_at }}" readonly>
    </div>
    <div class="col">
      <label">Updated at</label>
      <input type="text" name="updated_at" class="form-control" placeholder="Updated_at" value="{{ $book->updated_at }}" readonly>
    </div>
  </div>
@endsection