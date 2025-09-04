<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pet>
 */
class PetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $especies = ['Perro', 'Gato', 'Conejo', 'Hamster', 'Pájaro'];
        $razasPerro = ['Golden Retriever', 'Labrador', 'Pastor Alemán', 'Bulldog', 'Beagle', 'Chihuahua', 'Poodle'];
        $razasGato = ['Persa', 'Siamés', 'Maine Coon', 'Bengalí', 'Ragdoll', 'Británico de Pelo Corto'];
        $razasConejo = ['Holandés', 'Angora', 'Rex', 'Lop', 'Flemish Giant'];
        $razasHamster = ['Sirio', 'Enano Ruso', 'Roborovski', 'Chino'];
        $razasPajaro = ['Canario', 'Periquito', 'Cacatúa', 'Agapornis', 'Jilguero'];

        $especie = fake()->randomElement($especies);

        $raza = match ($especie) {
            'Perro' => fake()->randomElement($razasPerro),
            'Gato' => fake()->randomElement($razasGato),
            'Conejo' => fake()->randomElement($razasConejo),
            'Hamster' => fake()->randomElement($razasHamster),
            'Pájaro' => fake()->randomElement($razasPajaro),
            default => 'Mixto'
        };

        $nombres = [
            'Max',
            'Bella',
            'Charlie',
            'Luna',
            'Cooper',
            'Lucy',
            'Rocky',
            'Daisy',
            'Duke',
            'Lola',
            'Bear',
            'Sadie',
            'Tucker',
            'Molly',
            'Jack',
            'Sophie',
            'Buddy',
            'Chloe',
            'Oliver',
            'Zoe',
            'Zeus',
            'Lily',
            'Leo',
            'Coco',
            'Milo',
            'Ruby',
            'Toby',
            'Penny',
            'Oscar',
            'Rosie'
        ];

        return [
            'nombre' => fake()->randomElement($nombres),
            'especie' => $especie,
            'raza' => $raza,
            'edad' => fake()->numberBetween(1, 15),
        ];
    }
}
