<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Profile;
use App\Models\User;
use Database\Factories\CommentFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = User::factory(7)->create();

        foreach ($users as $user) {
            Profile::factory()->create(['user_id' => $user->id, 'email' => $user->email]);

            $posts = Post::factory(rand(1, 3))->create(['user_id' => $user->id]);

            $posts->each(function ($post) use ($users) {
                Comment::factory()
                    ->count(rand(1, 4))
                    ->state(new Sequence(fn () => [
                        'user_id' => $users->random()->id,
                        'post_id' => $post->id
                    ]))->create();
            });
        };
    }
}