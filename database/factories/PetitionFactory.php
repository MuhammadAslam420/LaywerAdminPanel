<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PetitionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $city_name=$this->faker->unique()->words($nb=2,$asText=true);
        return [
            //
            'user_id'=>$this->faker->numberBetween(2,22),
            'court_id'=>$this->faker->numberBetween(1,20),
            'city_id'=>$this->faker->numberBetween(1,20),
            'case'=>$this->faker->text(100),
            'files'=>'case'.$this->faker->unique()->numberBetween(1,21).'.png',
            'clientname'=>$this->faker->text(50),
            'mobile'=>'030064735'.$this->faker->numberBetween(10,99),
            'address'=>$this->faker->text(250),
            'town'=>$this->faker->text(40),
            'province'=>$this->faker->text(45),
            'case_amount'=>$this->faker->numberBetween(50000,500000),
            'taken_amount'=>45000,
            'case_start_date'=>$this->faker->dateTimeBetween('now', '+01 days')
        ];
    }
}
