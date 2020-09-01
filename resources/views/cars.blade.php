@extends('layouts.layout')
@section('main')

<h1>Lista auto</h1>
  <h2>Database MYSQL</h2>
    <ul>

      @foreach ($arrayCars as $car)
        <li><h3>{{$car->name}}<br>{{$car->model}}</h3><img src="{{$car->imgurl}}" alt=""></li>
      @endforeach

    </ul>

  <h2>Array normale</h2>
    <ul>
      <?php
      foreach ($arrayCarsNoDb as $car) {
        echo '<li><h3>'.$car['name'].'<br>'.$car['model'].'</h3>'.'<img src="'.$car['imgurl'].'" alt=""></li>';
      }
      ?>
    </ul>

    <a href="/api/api-cars">Sezione Api</a>
    <br>
    <a href="/handlebars-cars">Auto stampate con Handlebars</a>
@endsection
