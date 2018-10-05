<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinioController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $values = [];
    foreach (range(1, 100) as $number) {
      array_push($values, $number);
      switch ($number % 3)
      {
        case 0:
          array_push($values, 'Linio');
          break;
      }

      switch($number % 5)
      {
        case 0:
          array_push($values, 'IT');
          break;
      }

      switch($number % 3 && $number % 5)
      {
        case 0:
          array_push($values, 'Linianos');
          break;
      }
    }
    return view('index', ['results' => $values]);
  }
}
