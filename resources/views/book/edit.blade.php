@extends('layouts.app')

    @section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">PAVADINIMAS</div>
                    <div class="card-body">
                        <div class="form-group">
                            <form method="POST" action="{{route('book.update',[$book])}}">
                                <div class="form-group">
                                    <label>Title</label>
                                    <small class="form-text text-muted">
                                    <input type="text" name="book_title" class="form-control" value="{{$book->title}}">
                                    </small>
                                </div>
                                 <div class="form-group">
                                    <label>ISBN:</label>
                                    <input type="text" class="form-control" name="book_isbn" value="{{$book->isbn}}">
                                </div>
                                <div class="form-group">
                                    <label>Pages:</label>
                                    <input type="text" class="form-control" name="book_pages" value="{{$book->pages}}">
                                </div>
                                 <div class="form-group">
                                    <label>About:</label>
                                    <small class="form-text text-muted"><textarea name="book_about" id="summernote">{{$book->about}}</textarea></small>
                                </div>
                                <div class="form-group">
                                    <select name="author_id">
                                    @foreach ($authors as $author)
                                    <small class="form-text text-muted"><option value="{{$author->id}}" @if($author->id == $book->author_id) selected @endif>
                                    {{$author->name}} {{$author->surname}}
                            </option></small>
                        @endforeach
                                     </select>
                                     </div>
                                @csrf
                                <div class="form-group">
                            <button type="submit">EDIT</button>
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















