<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage as FacadeStorage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        // random avatar
        $url = 'https://i.pravatar.cc/300';
        $imageContent = file_get_contents($url);
        $image = substr($url, strrpos($url, '/') + 1) . '_' . time() . '.png';

        FacadeStorage::disk('public')->put('avatars/' . $image, $imageContent);

        return [
            "name" => $this->faker->firstName() . ' ' . $this->faker->lastName(),
            "avatar" => "/avatars/$image",
            "location" => $this->faker->address(),
            "job" => "Software Engineer",
            "bio" => $this->faker->paragraph(3),
        ];
    }
}