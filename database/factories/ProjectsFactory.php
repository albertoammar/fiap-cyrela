<?php

namespace Database\Factories;

use App\Models\Projects;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProjectsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Projects::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->name,
            'status' => 'Lançamento',
            'fotos' => [],
            'titulo' => '',
            'IPTU' => 600,
            'quartos' => $this->faker->numberBetween(0,5),
            'banheiros' => $this->faker->numberBetween(0,5),
            'vagas' => $this->faker->numberBetween(0,5),
            'estacionamento' => $this->faker->numberBetween(0,5),
            'descrição' => 'Queremos proporcionar a melhor qualidade de vida para você e sua família. Por isso, o São Pedro Life é ideal! O condomínio preza pelo prazer e bem-estar dos seus moradores, com tecnologia e projetos que proporcionam e incentivam o estilo de vida saudável. Além disso, possui excelente localização e um espaço amplo para ser aproveitado da melhor forma.',
            'estado' => 'SP',
            'cidade' => 'São Paulo',
            'bairro' => 'Vila Matilde',
            'rua' => 'Rua Alice Silvera Lopes',
            'numero' => '32',
        ];
    }
}
