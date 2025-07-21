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
                'faction_description' => 'Autobots are the heroic Transformers, fighting to protect freedom and peace.',
                'vehicle_type' => 'Semi-truck',
            ],
            [
                'name' => 'Bumblebee',
                'description' => 'Scout and loyal Autobot.',
                'image' => 'bumblebee.jpg',
                'faction' => 'Autobot',
                'faction_description' => 'Autobots are the heroic Transformers, fighting to protect freedom and peace.',
                'vehicle_type' => 'Volkswagen Beetle / Camaro',
            ],
            [
                'name' => 'Megatron',
                'description' => 'Leader of the Decepticons.',
                'image' => 'megatron.jpg',
                'faction' => 'Decepticon',
                'faction_description' => 'Decepticons are the villainous Transformers, seeking power and domination.',
                'vehicle_type' => 'Gun / Tank / Jet',
            ],
            [
                'name' => 'Starscream',
                'description' => 'Decepticon air commander.',
                'image' => 'starscream.jpg',
                'faction' => 'Decepticon',
                'faction_description' => 'Decepticons are the villainous Transformers, seeking power and domination.',
                'vehicle_type' => 'F-15 Eagle Jet',
            ],
            [
                'name' => 'Ironhide',
                'description' => 'Autobot weapons specialist.',
                'image' => 'ironhide.jpg',
                'faction' => 'Autobot',
                'faction_description' => 'Autobots are the heroic Transformers, fighting to protect freedom and peace.',
                'vehicle_type' => 'Van / Pickup Truck',
            ],
            [
                'name' => 'Ratchet',
                'description' => 'Autobot medic.',
                'image' => 'ratchet.jpg',
                'faction' => 'Autobot',
                'faction_description' => 'Autobots are the heroic Transformers, fighting to protect freedom and peace.',
                'vehicle_type' => 'Ambulance / Rescue Vehicle',
            ],
            [
                'name' => 'Soundwave',
                'description' => 'Decepticon communications officer.',
                'image' => 'soundwave.jpg',
                'faction' => 'Decepticon',
                'faction_description' => 'Decepticons are the villainous Transformers, seeking power and domination.',
                'vehicle_type' => 'Cassette Player / SUV',
            ],
            [
                'name' => 'Shockwave',
                'description' => 'Decepticon scientist.',
                'image' => 'shockwave.jpg',
                'faction' => 'Decepticon',
                'faction_description' => 'Decepticons are the villainous Transformers, seeking power and domination.',
                'vehicle_type' => 'Laser Gun / Cybertronian Tank',
            ],
            [
                'name' => 'Jazz',
                'description' => 'Autobot special operations agent.',
                'image' => 'jazz.jpg',
                'faction' => 'Autobot',
                'faction_description' => 'Autobots are the heroic Transformers, fighting to protect freedom and peace.',
                'vehicle_type' => 'Porsche 935',
            ],
            [
                'name' => 'Wheeljack',
                'description' => 'Autobot engineer.',
                'image' => 'wheeljack.jpg',
                'faction' => 'Autobot',
                'faction_description' => 'Autobots are the heroic Transformers, fighting to protect freedom and peace.',
                'vehicle_type' => 'Lancia Stratos Turbo',
            ],
            [
                'name' => 'Grimlock',
                'description' => 'Leader of the Dinobots.',
                'image' => 'grimlock.jpg',
                'faction' => 'Autobot',
                'faction_description' => 'Autobots are the heroic Transformers, fighting to protect freedom and peace.',
                'vehicle_type' => 'Tyrannosaurus Rex',
            ],
            [
                'name' => 'Prowl',
                'description' => 'Autobot military strategist.',
                'image' => 'prowl.jpg',
                'faction' => 'Autobot',
                'faction_description' => 'Autobots are the heroic Transformers, fighting to protect freedom and peace.',
                'vehicle_type' => 'Datsun 280ZX Police Car',
            ],
            [
                'name' => 'Arcee',
                'description' => 'Autobot female warrior.',
                'image' => 'arcee.jpg',
                'faction' => 'Autobot',
                'faction_description' => 'Autobots are the heroic Transformers, fighting to protect freedom and peace.',
                'vehicle_type' => 'Cybertronian Car',
            ],
            [
                'name' => 'Ultra Magnus',
                'description' => 'Autobot city commander.',
                'image' => 'ultra_magnus.jpg',
                'faction' => 'Autobot',
                'faction_description' => 'Autobots are the heroic Transformers, fighting to protect freedom and peace.',
                'vehicle_type' => 'Car Carrier Truck',
            ],
            [
                'name' => 'Hot Rod',
                'description' => 'Young Autobot warrior.',
                'image' => 'hot_rod.jpg',
                'faction' => 'Autobot',
                'faction_description' => 'Autobots are the heroic Transformers, fighting to protect freedom and peace.',
                'vehicle_type' => 'Sports Car',
            ],
            [
                'name' => 'Springer',
                'description' => 'Autobot triple changer.',
                'image' => 'springer.jpg',
                'faction' => 'Autobot',
                'faction_description' => 'Autobots are the heroic Transformers, fighting to protect freedom and peace.',
                'vehicle_type' => 'Helicopter / Armored Car',
            ],
            [
                'name' => 'Blitzwing',
                'description' => 'Decepticon triple changer.',
                'image' => 'blitzwing.jpg',
                'faction' => 'Decepticon',
                'faction_description' => 'Decepticons are the villainous Transformers, seeking power and domination.',
                'vehicle_type' => 'Tank / Jet',
            ],
            [
                'name' => 'Devastator',
                'description' => 'Decepticon combiner.',
                'image' => 'devastator.jpg',
                'faction' => 'Decepticon',
                'faction_description' => 'Decepticons are the villainous Transformers, seeking power and domination.',
                'vehicle_type' => 'Construction Vehicles (Combiner)',
            ],
            [
                'name' => 'Skywarp',
                'description' => 'Decepticon teleporter.',
                'image' => 'skywarp.jpg',
                'faction' => 'Decepticon',
                'faction_description' => 'Decepticons are the villainous Transformers, seeking power and domination.',
                'vehicle_type' => 'F-15 Eagle Jet',
            ],
            [
                'name' => 'Thundercracker',
                'description' => 'Decepticon air warrior.',
                'image' => 'thundercracker.jpg',
                'faction' => 'Decepticon',
                'faction_description' => 'Decepticons are the villainous Transformers, seeking power and domination.',
                'vehicle_type' => 'F-15 Eagle Jet',
            ],
        ];
        foreach ($transformers as $t) {
            Task::create($t);
        }
    }
}
