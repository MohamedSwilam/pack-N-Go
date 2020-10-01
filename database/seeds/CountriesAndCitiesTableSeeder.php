<?php

use App\City;
use App\Country;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class CountriesAndCitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = Storage::disk('public')->get('countries2.json');
        $countries = json_decode($json,true);
        $countries_names= array_keys($countries);


        for($i = 0; $i < count($countries_names); $i++)
        {
            $model = Country::where('name', $countries_names[$i])->first();
            if (!$model){
                $id = Country::create([
                    'name' => $countries_names[$i],
                    'region' => $countries_names[$i]
                ])->id;
            }
            else{
                $id = $model->id;
            }

          foreach ($countries[$countries_names[$i]] as $country) {



                  if (!City::where('name', $country)->first()) {
                      City::create([
                          'name' => $country,
                          'code' => $country,
                          'country_id' => $id
                      ]);
                  }
          }
        }
    }
}
