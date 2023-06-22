<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technologie;
use Illuminate\Support\Str;

class TechnologiesTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
    public function run()
  {
    $data = [
      'Front End',
      'Back End',
      'Design',
      'UX',
      'Laravel',
      'VueJs'
    ];

    foreach($data as $tec){
      $new_tec = new Technologie();
      $new_tec->name = $tec;
      $new_tec->slug = Str::slug($tec, '-');
      $new_tec->save();
    }

  }
}
