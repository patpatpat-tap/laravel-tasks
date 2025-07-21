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
                'faction' => 'Autobot',
            ],
            [
                'name' => 'Bumblebee',
                'description' => 'Scout and loyal Autobot.',
                'image' => 'bumblebee.jpg',
                'faction' => 'Autobot',
            ],
            [
                'name' => 'Megatron',
                'description' => 'Leader of the Decepticons.',
                'image' => 'megatron.jpg',
                'faction' => 'Decepticon',
            ],
            [
                'name' => 'Starscream',
                'description' => 'Decepticon air commander.',
                'image' => 'starscream.jpg',
                'faction' => 'Decepticon',
            ],
            [
                'name' => 'Ironhide',
                'description' => 'Autobot weapons specialist.',
                'image' => 'ironhide.jpg',
                'faction' => 'Autobot',
            ],
            [
                'name' => 'Ratchet',
                'description' => 'Autobot medic.',
                'image' => 'ratchet.jpg',
                'faction' => 'Autobot',
            ],
            [
                'name' => 'Soundwave',
                'description' => 'Decepticon communications officer.',
                'image' => 'soundwave.jpg',
                'faction' => 'Decepticon',
            ],
            [
                'name' => 'Shockwave',
                'description' => 'Decepticon scientist.',
                'image' => 'shockwave.jpg',
                'faction' => 'Decepticon',
            ],
            [
                'name' => 'Jazz',
                'description' => 'Autobot special operations agent.',
                'image' => 'jazz.jpg',
                'faction' => 'Autobot',
            ],
            [
                'name' => 'Wheeljack',
                'description' => 'Autobot engineer.',
                'image' => 'wheeljack.jpg',
                'faction' => 'Autobot',
            ],
            [
                'name' => 'Grimlock',
                'description' => 'Leader of the Dinobots.',
                'image' => 'grimlock.jpg',
                'faction' => 'Autobot',
            ],
            [
                'name' => 'Prowl',
                'description' => 'Autobot military strategist.',
                'image' => 'prowl.jpg',
                'faction' => 'Autobot',
            ],
            [
                'name' => 'Arcee',
                'description' => 'Autobot female warrior.',
                'image' => 'arcee.jpg',
                'faction' => 'Autobot',
            ],
            [
                'name' => 'Ultra Magnus',
                'description' => 'Autobot city commander.',
                'image' => 'ultra_magnus.jpg',
                'faction' => 'Autobot',
            ],
            [
                'name' => 'Hot Rod',
                'description' => 'Young Autobot warrior.',
                'image' => 'hot_rod.jpg',
                'faction' => 'Autobot',
            ],
            [
                'name' => 'Springer',
                'description' => 'Autobot triple changer.',
                'image' => 'springer.jpg',
                'faction' => 'Autobot',
            ],
            [
                'name' => 'Blitzwing',
                'description' => 'Decepticon triple changer.',
                'image' => 'blitzwing.jpg',
                'faction' => 'Decepticon',
            ],
            [
                'name' => 'Devastator',
                'description' => 'Decepticon combiner.',
                'image' => 'devastator.jpg',
                'faction' => 'Decepticon',
            ],
            [
                'name' => 'Skywarp',
                'description' => 'Decepticon teleporter.',
                'image' => 'skywarp.jpg',
                'faction' => 'Decepticon',
            ],
            [
                'name' => 'Thundercracker',
                'description' => 'Decepticon air warrior.',
                'image' => 'thundercracker.jpg',
                'faction' => 'Decepticon',
            ],
        ];
        foreach ($transformers as $t) {
            Task::create($t);
        }
    }
}
