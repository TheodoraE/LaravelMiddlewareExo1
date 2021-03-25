@extends('template.main')

@section('content')
<div class="container">
    <div>
      <ul>
        <a href="/backoffices" class="text-dark"><h5>Articles</h5></a>
        <a href="/users" class="text-dark"><h5>Users</h5></a>
      </ul>
    </div>

      <h1 class="mb-3">Users</h1>

      <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Role</th>
              {{-- <th scope="col"> </th> --}}
              {{-- <th scope="col"> </th> --}}
              {{-- <th scope="col"> </th> --}}
            </tr>
          </thead>
          <tbody>
            @foreach ($users as $user)
              <tr>
                  <th scope="row">{{$user->id}}</th>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->roles->name}}</td>
                  {{-- <td>
                      <a href="/users/{{$user->id}}" class="btn btn-primary">SHOW</a>
                  </td> --}}
                  {{-- <td>
                      <a href="/users/{{$user->id}}/edit" class="btn btn-warning">EDIT</a>
                  </td> --}}
                  {{-- <td>
                      <form action="/users/{{$user->id}}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger">DELETE</button>
                      </form>
                  </td> --}}
              </tr>
            @endforeach
          </tbody>
      </table>
  </div>
@endsection