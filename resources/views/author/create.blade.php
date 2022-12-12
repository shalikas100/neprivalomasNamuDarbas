@extends('layouts.app')

@section('content')

<div class="container">

<div class="row justify-content-center">

<div class="col-md-8">

<div class="card">

<div class="card-header">PAVADINIMAS</div>

<div class="card-body">



<label>Pavadinimas</label>

<input type="text" class="form-control">

<small class="form-text text-muted">Kažkoks parašymas.</small>

    <div class="form-group">

        <form method="POST" action="{{route('author.store')}}">

        <div class="form-group">
            <label>Name:</label>
            <input type="text" name="author_name" class="form-control">
        </div>
        <div class="form-group">
            <label>Surname:</label>
            <input type="text" name="author_surname" class="form-control">
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

@endsection













