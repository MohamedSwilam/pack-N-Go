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
        $json = Storage::disk('public')->get('countries.json');
        $countries = json_decode($json);

        foreach ($countries as $country){
            $model = Country::where('name', $country->name)->first();
            if (!$model){
                $id = Country::create([
                    'name' => $country->name,
                    'region' => $country->region
                ])->id;
            }
            else{
                $id = $model->id;
            }
            if (!City::where('name', $country->capital)->first()){
                City::create([
                    'name' => $country->capital,
                    'code' => '',
                    'country_id' => $id
                ]);
            }
            foreach ($country->states as $state){
                if (!City::where('name', $state->name)->first()){
                    City::create([
                        'name' => $state->name,
                        'code' => $state->code,
                        'country_id' => $id
                    ]);
                }
            }
        }
    }
}
