@extends('template.main')

@section('content')
    <div class="container">
      <div>
        <ul>
          <a href="/backoffices" class="text-dark"><h5>Articles</h5></a>
          <a href="/users" class="text-dark"><h5>Users</h5></a>
        </ul>
      </div>

        <h1 class="mb-3">Backoffice</h1>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Text</th>
                <th scope="col">Author</th>
                {{-- <th scope="col"> </th> --}}
                <th scope="col"> </th>
                <th scope="col"> </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($articles as $article)
                <tr>
                    <th scope="row">{{$article->id}}</th>
                    <td>{{$article->title}}</td>
                    <td>{{$article->text}}</td>
                    <td>{{$article->users->name}}</td>
                    {{-- <td>
                        <a href="/articles/{{$article->id}}" class="btn btn-primary">SHOW</a>
                    </td> --}}
                    <td>
                        <a href="/articles/{{$article->id}}/edit" class="btn btn-warning">EDIT</a>
                    </td>
                    <td>
                        <form action="/articles/{{$article->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">DELETE</button>
                        </form>
                    </td>
                </tr>
              @endforeach
            </tbody>
        </table>
    </div>
@endsection