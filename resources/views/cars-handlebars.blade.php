@extends('layouts.layout')
@section('main')

<h1>Lista auto Handlebars</h1>

<div>
  <ul id="carsList">

  </ul>
</div>

<a href="/api/api-cars">Sezione Api</a>
<br>
<a href="/cars">Auto stampate con Array e MYSQL</a>

<script id="entry-template" type="text/x-handlebars-template">
  <li><h3>@{{name}}<br>@{{model}}</h3>
    <img src="@{{imgurl}}" alt="">
  </li>
</script>

<script src="{{asset('js/app.js')}}"></script>
@endsection
