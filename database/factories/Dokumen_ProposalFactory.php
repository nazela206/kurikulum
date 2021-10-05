<?php

namespace Database\Factories;

use App\Models\Dokumen_Proposal;
use Illuminate\Database\Eloquent\Factories\Factory;

class Dokumen_ProposalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Dokumen_Proposal::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nomor_proposal' => $this->faker->word,
        'nama_pengirim' => $this->faker->word,
        'deskripsi' => $this->faker->text,
        'file' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
