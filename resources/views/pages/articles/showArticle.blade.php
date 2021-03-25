@extends('template.main')

@section('content')
    <div class="card">
        <a href="/backoffices" class="btn btn-info">Go Back</a>
        <div class="card-body">
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
                    <tr>
                        <th scope="row">{{$show->id}}</th>
                        <td>{{$show->title}}</td>
                        <td>{{$show->text}}</td>
                        <td>{{$show->users->name}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection