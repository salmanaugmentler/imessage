<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $sender_id = rand(1,2);
        $receiver_id = $sender_id == 1? 2 : 1;
        return [
            'sender_id' => $sender_id,
            'receiver_id' => $receiver_id,
            'message' => $this->faker->realText(20),
        ];
    }
}
