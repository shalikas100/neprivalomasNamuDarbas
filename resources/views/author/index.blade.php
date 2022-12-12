@extends('layouts.app')

@section('content')

<div class="container">

<div class="row justify-content-center">

<div class="col-md-8">

<div class="card">

<div class="card-header">PAVADINIMAS</div>

<div class="card-body">

@foreach ($authors as $author)

<a href="{{route('author.edit',[$author])}}">{{$author->name}} {{$author->surname}}</a>

    <div class="form-group">
        <form method="POST" action="{{route('author.destroy', [$author])}}">

@csrf
            <div class="form-group">
                <button type="submit">DELETE</button>
            </div>
        </form>
    </div>
<br>

@endforeach

</div>

</div>

</div>

</div>

</div>

@endsection