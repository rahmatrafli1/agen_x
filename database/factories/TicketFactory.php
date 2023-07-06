<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ticket_name' => 'ColdPlay',
            'ticket_price' => '1500000',
            'ticket_class_id' => 3,
            'status' => 1
        ];
    }
}
