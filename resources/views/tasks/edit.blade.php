@extends('layouts.app')
@section('main')

<div class="mt-5 mx-auto" style="width: 380px">
  @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif
<div class="card">
    <div class="card-body">
        <form action="{{ url("/pinjam/$data->id") }}" method="POST">
         @csrf
         @method('PATCH')
            <div class="mb-3">
                <label for="" class="form-label">Nama</label>
                <input name="name" type="text" class="form-control" value="{{ old('name', $data->name) }}">
                @error('name')
                    <span class="text-danger">
                      {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Nama Buku</label>
                <input name="book_name" class="form-control" value="{{ old('book_name', $data->book_name) }}">
                @error('book_name')
                <span class="text-danger">
                  {{ $message }}
                </span>
            @enderror
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Status</label>
              <select name="" id="">
                <option value="">Sudah Dikembalikan</option>
                <option value="">belum Dikembalikan</option>
              </select>
              <input name="status" class="form-control" value="{{ old('status', $data->status) }}">
              @error('status')
              <span class="text-danger">
                {{ $message }}
              </span>
          @enderror
          </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
</div>

    
@endsection