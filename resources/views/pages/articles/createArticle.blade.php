@extends('template.main')

@section('content')
    <div>
        <form action="/articles" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title : </label>
                <input type="text" name="title" value="{{old('title')}}" class="border">
            </div>
            <div class="form-group">
                <label for="text">Article : </label>
                <textarea name="text" id="" cols="100" rows="5" class="border"></textarea>
            </div>

            <button type="submit" class="btn btn-success">CREATE</button>
        </form>
    </div>
@endsection