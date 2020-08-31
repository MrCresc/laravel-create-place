@extends('layouts.layout')
@section('main')

<h1>Lista auto</h1>
  <ul>
    <?php
    foreach ($arrayCars as $car) {
      echo '<li style="display:inline"><h2>'.$car['name'].' '.$car['model'].'</h2>'.'<img src="'.$car['imgurl'].'" alt=""></li>';
    }
    ?>
  </ul>
@endsection
