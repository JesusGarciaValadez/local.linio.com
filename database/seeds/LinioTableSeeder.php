<?php

use Illuminate\Database\Seeder;

class LinioTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    foreach (range(1, 100) as $number)
    {
      factory(App\Linio::class)->create(['number' => $number]);
    }
  }
}
