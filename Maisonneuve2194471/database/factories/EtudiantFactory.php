<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Etudiant;
use App\Models\Ville;

class EtudiantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom'=>$this->faker->name(),
            'adresse'=>$this->faker->address(),
            'phone'=>$this->faker->phoneNumber(),
            'email'=>$this->faker->email(),
            'date_de_naissance'=>$this->faker->date(),
            // 'user_id' => User::all()->random()->id (UPDATE)
            'ville_id'=>Ville::all()->random()->id
        ];
    }
}
