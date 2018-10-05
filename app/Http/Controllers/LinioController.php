<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Linio;
use App\Enums\ResponseType;

class LinioController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $linios = Linio::all();

    $numbers = [];
    foreach ($linios as $linio) {
      $number = $linio->number;

      switch ($linio->isMultipleOfThree())
      {
        case true:
          $number = \App\Enums\ResponseType::LINIO;
          break;
      }

      switch($linio->isMultipleOfFive())
      {
        case true:
          $number = \App\Enums\ResponseType::IT;
          break;
      }

      switch($linio->isMultipleOfBoth())
      {
        case true:
          $number = \App\Enums\ResponseType::LINIANOS;
          break;
      }

      array_push($numbers, $number);
    }
    return view('index')->withResults($numbers);
  }
}
