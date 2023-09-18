@extends('layout.app')

@section('content')
  <div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">Daftar Buku</h1>
    <a href="{{ route('book.create') }}" class="btn btn-primary">Tambah Buku</a>
  </div>
  <hr />

  @if (Session::has('success'))
  <div class="alert alert-success" role="alert">
    {{ Session::get('success') }}
  </div>
  @endif


  <div class="d-flex align-items-center justify-content-between">
    <table class="table table-hover align-middle text-center justify-center align-items-center">
      <thead class="table-dark">
        <tr>
          <th>No</th>
          <th>Nama Buku</th>
          <th>Pengarang</th>
          <th>Tahun</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @if ($books->count() > 0)
        @foreach ($books as $book)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $book->name }}</td>
          <td>{{ $book->autohor }}</td>
          <td>{{ $book->year }}</td>
          <td>
            <div class="btn-group" role="group" aria-label="Basic example">
              <a href="{{ route('book.show', $book->id) }}" type="button" class="btn btn-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-slash-fill" viewBox="0 0 16 16">
                <path d="m10.79 12.912-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z"/>
                <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829zm3.171 6-12-12 .708-.708 12 12-.708.708z"/>
              </svg></a>
              <a href="{{ route('book.edit', $book->id) }}" type="button" class="btn btn-warning text-bold"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
              </svg></a>
              <form action="{{ route('book.destroy', $book->id) }}" type="button" method="POST" class="btn btn-danger" onsubmit="return confirm('Delete')">
                <button class="btn btn-danger p-0 m-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
              </svg>
            </button>
              @csrf
              @method('DELETE')
              </form>
            </div>
          </td>
        </tr>
        @endforeach
        @else
          <tr>
            <td colspan="5">book not foud</td>
          </tr>
        @endif
        
      </tbody>
    </table>
  </div>
@endsection