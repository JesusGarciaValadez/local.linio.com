<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Linio;

class LinioTest extends TestCase
{
  use RefreshDatabase;

  public function setUp()
  {
    parent::setUp();

    foreach (range(1, 100) as $number)
    {
      factory(Linio::class)->create(['number' => $number]);
    }
  }

  /** @tests */
  public function testIfThirtyIsMultipleOfThree()
  {
    $linio = Linio::find(30);

    $this->assertEquals($linio->number, 30);
    $this->assertTrue($linio->isMultipleOfThree());
  }

  /** @tests */
  public function testIfFiftyIsMultipleOfFive()
  {
    $linio = Linio::find(50);

    $this->assertEquals($linio->number, 50);
    $this->assertTrue($linio->isMultipleOfFive());
  }

  /** @tests */
  public function testIfNinetyIsMultipleOfBothThreeAndFive()
  {
    $linio = Linio::find(90);

    $this->assertEquals($linio->number, 90);
    $this->assertTrue($linio->isMultipleOfBoth());
  }

  /** @tests */
  public function testIfThirtyOneIsNotMultipleOfThree()
  {
    $linio = Linio::find(31);

    $this->assertEquals($linio->number, 31);
    $this->assertFalse($linio->isMultipleOfThree());
  }

  /** @tests */
  public function testIfFiftyOneIsMultipleOfFive()
  {
    $linio = Linio::find(51);

    $this->assertEquals($linio->number, 51);
    $this->assertFalse($linio->isMultipleOfFive());
  }

  /** @tests */
  public function testIfNinetyOneIsNotMultipleOfBothThreeAndFive()
  {
    $linio = Linio::find(91);

    $this->assertEquals($linio->number, 91);
    $this->assertFalse($linio->isMultipleOfBoth());
  }
}
