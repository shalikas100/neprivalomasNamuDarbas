@extends('layouts.app')

@section('content')

<div class="container">

<div class="row justify-content-center">

<div class="col-md-8">

<div class="card">

<div class="card-header">PAVADINIMAS</div>

<div class="card-body">


    <div class="form-group">

        <form method="POST" action="{{route('author.update',[$author])}}">

            <div class="form-group">
                <label>Name:</label>
                <input type="text" name="author_name" class="form-control" value="{{$author->name}}">
            </div>
            <div class="form-group">
                <label>Surname:</label>
                <input type="text" name="author_surname" class="form-control" value="{{$author->surname}}">
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

@endsection







