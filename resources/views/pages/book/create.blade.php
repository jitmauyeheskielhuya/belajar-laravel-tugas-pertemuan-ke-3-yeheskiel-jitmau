@extends('layout.app')

@section('content')
  <div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">Tambah Buku</h1>
    {{-- <a href="{{ route('book.create') }}" class="btn btn-primary">Add Book</a> --}}
  </div>
  <hr />

  <form action="{{ route('book.store') }}" method="POST">
    @csrf
  <div class="row mb-3">
    <div class="col">
      <input type="text" name="name" class="form-control" placeholder="Nama Buku">
    </div>
    <div class="col">
      <input type="text" name="autohor" class="form-control" placeholder="Pengarang">
    </div>
  </div>
  <div class="row mb-3">
    <div class="col">
      <input type="text" name="year" class="form-control" placeholder="Tahun">
    </div>
    <div class="col">
      <textarea name="description" class="form-control" placeholder="Deskripsi"></textarea>
    </div>
  </div>
  <div class="row">
    <div class="d-grid">
      <button class="btn btn-primary">Submit</button>
    </div>
  </div>
  </form>
@endsection