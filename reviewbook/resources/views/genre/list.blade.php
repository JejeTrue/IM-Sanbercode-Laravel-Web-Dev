@extends('layouts.master')
@section('title')
    List Genre
@endsection
@section('content')
    <a href="/genre/create" class="btn btn-primary btn-sm my-3">Tambah</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @forelse ( $genres as $genre )
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$genre->name}}</td>
                <td>
                  <form action="/genre/{{$genre->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="/genre/{{$genre->id}}" class="btn btn-info btn-sm">Detail</a>
                    <a href="/genre/{{$genre->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                    <input type="submit" class="btn btn-danger btn-sm" value="Delete" onclick="return confirm('Are you sure?')">
                  </form>
                </td>
              </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center">No Data</td>
                </tr>
            @endforelse
          
        </tbody>
      </table>
@endsection