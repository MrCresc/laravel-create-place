<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Car;

class ApiCarController extends Controller
{
  public function JsonCars()
  {
    $JsonCars = Car::all();
    return response()->json(compact('JsonCars'));
  }
}
