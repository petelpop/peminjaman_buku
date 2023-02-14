@extends('layouts.app')
@section('main')

<div class="container">
  <table class="table table-striped-columns mt-5 mr-5 p-5">
    <thead>
    <th>Nama</th>
    <th>Nama Buku</th>
    <th>status</th>
    <th>edit</th>
  </thead>
  @foreach ($buku as $item)   
  
  <tbody>
    <td>1</td>
    <td>1</td>
    <td>1</td>
    <td><a class="btn btn-primary" href="">edit</a>
    <a class="btn btn-danger" href="">delete</a></td>
  </tbody>
  @endforeach
  </table>
</div>
    
@endsection