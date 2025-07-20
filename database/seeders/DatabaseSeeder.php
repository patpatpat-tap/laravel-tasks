<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Seed 20 Transformer tasks
        $transformers = [
            [
                'name' => 'Optimus Prime',
                'description' => 'Leader of the Autobots.',
                'image' => 'optimus_prime.jpg',
            ],
            [
                'name' => 'Bumblebee',
                'description' => 'Scout and loyal Autobot.',
                'image' => 'bumblebee.jpg',
            ],
            [
                'name' => 'Megatron',
                'description' => 'Leader of the Decepticons.',
                'image' => 'megatron.jpg',
            ],
            [
                'name' => 'Starscream',
                'description' => 'Decepticon air commander.',
                'image' => 'starscream.jpg',
            ],
            [
                'name' => 'Ironhide',
                'description' => 'Autobot weapons specialist.',
                'image' => 'ironhide.jpg',
            ],
            [
                'name' => 'Ratchet',
                'description' => 'Autobot medic.',
                'image' => 'ratchet.jpg',
            ],
            [
                'name' => 'Soundwave',
                'description' => 'Decepticon communications officer.',
                'image' => 'soundwave.jpg',
            ],
            [
                'name' => 'Shockwave',
                'description' => 'Decepticon scientist.',
                'image' => 'shockwave.jpg',
            ],
            [
                'name' => 'Jazz',
                'description' => 'Autobot special operations agent.',
                'image' => 'jazz.jpg',
            ],
            [
                'name' => 'Wheeljack',
                'description' => 'Autobot engineer.',
                'image' => 'wheeljack.jpg',
            ],
            [
                'name' => 'Grimlock',
                'description' => 'Leader of the Dinobots.',
                'image' => 'grimlock.jpg',
            ],
            [
                'name' => 'Prowl',
                'description' => 'Autobot military strategist.',
                'image' => 'prowl.jpg',
            ],
            [
                'name' => 'Arcee',
                'description' => 'Autobot female warrior.',
                'image' => 'arcee.jpg',
            ],
            [
                'name' => 'Ultra Magnus',
                'description' => 'Autobot city commander.',
                'image' => 'ultra_magnus.jpg',
            ],
            [
                'name' => 'Hot Rod',
                'description' => 'Young Autobot warrior.',
                'image' => 'hot_rod.jpg',
            ],
            [
                'name' => 'Springer',
                'description' => 'Autobot triple changer.',
                'image' => 'springer.jpg',
            ],
            [
                'name' => 'Blitzwing',
                'description' => 'Decepticon triple changer.',
                'image' => 'blitzwing.jpg',
            ],
            [
                'name' => 'Devastator',
                'description' => 'Decepticon combiner.',
                'image' => 'devastator.jpg',
            ],
            [
                'name' => 'Skywarp',
                'description' => 'Decepticon teleporter.',
                'image' => 'skywarp.jpg',
            ],
            [
                'name' => 'Thundercracker',
                'description' => 'Decepticon air warrior.',
                'image' => 'thundercracker.jpg',
            ],
        ];
        foreach ($transformers as $t) {
            Task::create($t);
        }
    }
}
