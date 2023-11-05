<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class CityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $city_name=$this->faker->unique()->words($nb=2,$asText=true);
        $slug=Str::slug($city_name);
        return [
            //
            'city_name'=>$city_name,
            'slug'=>$slug
        ];
    }
}
