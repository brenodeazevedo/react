<?php
/**
 * @author Jessuir Cleydson
 */

namespace Database\Factories;

use App\Models\User;
use App\Models\Tickets;
use Illuminate\Database\Eloquent\Factories\Factory;

class TicketsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tickets::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'event_id' => User::factory(),
            'name' => $this->faker->name,
            'price' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 100),
            'section' => $this->faker->randomLetter,
        ];
    }
}
