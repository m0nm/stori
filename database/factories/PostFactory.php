<?php

namespace Database\Factories;

use Storage;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage as FacadeStorage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    public function definition()
    {

        // random bg_img
        $url = 'https://source.unsplash.com/random';
        $imageContent = file_get_contents($url);
        $image = substr($url, strrpos($url, '/') + 1) . '_' . time() . '.png';

        FacadeStorage::disk('public')->put('covers/' . $image, $imageContent);

        // random tags
        $tags = ['tech', 'health', 'productivity', 'travel'];
        $randomTags = json_encode(array_rand(array_flip($tags), rand(2, 4)));

        return [
            'title' => $this->faker->sentence(6),
            'tags' => $randomTags,
            'bg_img' => "/covers/$image",
            'body' => $this->faker->paragraphs(rand(5, 16), true),
        ];
    }
}
