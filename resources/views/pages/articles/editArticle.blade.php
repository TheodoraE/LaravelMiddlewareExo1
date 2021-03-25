@extends('template.main')

@section('content')
    <div>
        <form action="/articles/{{$edit->id}}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="title">Title : </label>
                <input type="text" name="title" value="{{old('title') ? old('title') : $edit->title}}" class="border">
            </div>
            <div class="form-group">
                <label for="text">Article : </label>
                <textarea name="text" id="" cols="100" rows="5" class="border">{{$edit->text}}</textarea>
            </div>

            <button type="submit" class="btn btn-success">UPDATE</button>
        </form>
    </div>
@endsection