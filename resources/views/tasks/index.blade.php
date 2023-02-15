@extends('layouts.app')
@section('main')

<div class="container">
    <a href="{{url('/pinjam/create')}}" class="btn btn-primary btn-xl my-3 p-2 ">add new data</a>
  <table class="table table-striped-columns mr-5 p-5">
    <thead>
    <th>Nama</th>
    <th>Nama Buku</th>
    <th>status</th>
    <th>edit</th>
  </thead>
  
  @foreach ($data as $index => $item)
      

  <tbody>
    <td>{{$item -> name}}</td>
    <td>{{$item -> book_name}}</td>
    <td>{{$item -> status}}</td>  
    <form action="{{ url("/pinjam/$item->id") }}" method="POST">
    @csrf
    @method('DELETE')
    <td><a class="btn btn-primary" href="{{url("/pinjam/$item->id/edit")}}">edit</a>
    <button type="submit" class="btn btn-danger">delete</button></td>
    </form>
  </tbody>
    @endforeach
  </table>
</div>
    
@endsection