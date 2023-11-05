<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HiringFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'petition_id'=>$this->faker->numberBetween(1,20),
            'remarks'=>$this->faker->text(500),
            'evidence'=>'evidence'.$this->faker->unique()->numberBetween(1,200).'.png',
            'court_document'=>'court'.$this->faker->unique()->numberBetween(1,200).'.png',
            'next-_hiring_date'=>$this->faker->dateTimeBetween('now', '+45 days')
        ];
    }
}
