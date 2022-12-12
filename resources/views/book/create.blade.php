@extends('layouts.app')

@section('content')

<div class="container">

<div class="row justify-content-center">

<div class="col-md-8">

<div class="card">

<div class="card-header">PAVADINIMAS</div>

<div class="card-body">

<form method="POST" action="{{route('book.store')}}">

        <div class="form-group">
            <label>Title:</label>
            <input type="text" class="form-control" name="book_title">     
        </div>
        <div class="form-group">
            <label>ISBN:</label>
            <input type="text" class="form-control" name="book_isbn">
        </div>
        <div class="form-group">
            <label>Pages:</label>
            <input type="text" class="form-control" name="book_pages">
        </div>
        <div class="form-group">
            <label>About:</label>
            <textarea name="book_about" class="form-control" id="summernote"></textarea>
        </div>
        <div class="form-group">
            <select name="author_id">

@foreach ($authors as $author)

            <option value="{{$author->id}}">{{$author->name}} {{$author->surname}}</option>

@endforeach
            </select>
        </div>

@csrf
        <div class="form-group">
            <button type="submit">ADD</button>
        </div>
</form>
</div>

</div>

</div>

</div>

</div>

</div>


<script>
$(document).ready(function() {
$('#summernote').summernote();
});

</script>

@endsection








