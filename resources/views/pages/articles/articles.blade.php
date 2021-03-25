@extends('template.main')

@section('content')
    <div class="container">
        <h1>Les articles</h1>

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
                    <td>{{$article->title}}</td>
                    <td>{{$article->text}}</td>
                    <td>{{$article->users->name}}</td>
                </tr>
              @endforeach
            </tbody>
        </table>
    </div>
@endsection