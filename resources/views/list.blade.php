@extends('adminLayout/index')
@section('content') 
<div class="container"> 
  <div class="row"> 
Tabel Dosen
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <td class="bg-success">NIP</td>
        <td class="bg-danger">NAME</td>
        <td class="bg-danger">MATAKULIAH</td>
        <td class="bg-success">ALAMAT</td>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($dosen as $item)
            
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td class="bg-success"> {{$item->nip}} </td>
            <td class="bg-danger"> {{$item->name}}</td>
            <td class="bg-danger"> {{$item->matkul->name}}</td>
            <td class="bg-success"> {{$item->alamat}}</td>
            <td><a href="/list/detail/{{$item->slug}}" class="btn btn-primary btn-sm">Edit</a></td>
            <td>
              <form action="/list/delete/{{$item->slug}}" method="POST">
              @method('delete')
              @csrf
              <button type="submit" class="btn btn-danger btn-sm">Delete</button>
              </form>
            </td>
        </tr>
        
        @endforeach
    </tbody>
  </table>
</div>
  <div class="row"> 
      <a href="/createdsn" class="btn btn-success btn-sm">Create</a>
  </div>
  <div class="row">
    {{$dosen->links('adminLayout.pagination')}}
</div>
</div>
@endsection