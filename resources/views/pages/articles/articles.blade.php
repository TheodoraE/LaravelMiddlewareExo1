@extends('template.main')

@section('content')
    <div class="container">
        <h1>Les articles</h1>
        
        <a href="/articles/create" class="btn btn-info mb-2">Ajouter un article</a>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Text</th>
                <th scope="col">Author</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($articles as $article)
                <tr>
                    <th scope="row">{{$article->id}}</th>
                    <td>
                      <a href="/articles/{{$article->id}}">{{$article->title}}</a>
                    </td>
                    <td>{{$article->text}}</td>
                    <td>{{$article->users->name}}</td>
                </tr>
              @endforeach
            </tbody>
        </table>
    </div>
@endsection