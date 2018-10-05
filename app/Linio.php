<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Linio extends Model
{
  /**
   * Check if the number attribute is multiple of three.
   *
   * @return boolean
   */
  public function isMultipleOfThree ()
  {
    return ($this->attributes['number'] % 3 === 0);
  }

  /**
   * Check if the number attribute is multiples of five.
   *
   * @return boolean
   */
  public function isMultipleOfFive ()
  {
    return ($this->attributes['number'] % 5 === 0);
  }

  /**
   * Check if the number attributes is both multiples of three and five.
   *
   * @return boolean
   */
  public function isMultipleOfBoth ()
  {
    return (
      $this->attributes['number'] % 3 === 0 &&
      $this->attributes['number'] % 5 === 0
    );
  }
}
