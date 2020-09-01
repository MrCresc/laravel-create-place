<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarController extends Controller
{
  public function arrayCars()
  {
    $arrayCarsNoDb = [
      [
        'name' => 'Ferrari',
        'model' => 'F40',
        'imgurl' => 'https://pm1.narvii.com/7037/7832da3567c3101e7fe4b6d6985a6977cc61b600r1-2048-1280v2_128.jpg'
      ],
      [
        'name' => 'McLaren',
        'model' => 'Gt',
        'imgurl' => 'https://images.wallpapersden.com/image/download/mclaren-600lt-and-gt_70538_128x128.jpg'
      ],
      [
        'name' => 'Ford',
        'model' => 'Gt 40',
        'imgurl' => 'https://64.media.tumblr.com/avatar_655427347087_128.pnj'
      ],
      [
        'name' => 'Dodge',
        'model' => 'Viper',
        'imgurl' => 'https://prodigits.co.uk/thumbs2/mobilium/wallpapers/down/new/cars-transport/128x128/dodge_viper-153172.jpg'
      ]
    ];

    $arrayCars = Car::all();
    return view('cars', compact('arrayCars','arrayCarsNoDb'));

    // Oppure si può usare la dicitura qui sotto
    // ['arrayCars' => $arrayCars]
  }

  public function handlebarsCars()
  {
    return view('cars-handlebars');
  }
}
