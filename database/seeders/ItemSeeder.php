<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            'Announcements',
            'Articles',
            'Book Clubs',
            'Team Members Biography',
            'Carousel',
            'Messages',
            'Our Story',
            'Quick Links',
            'Vision',
            'Why Us'
        ];
        foreach ($items as $item) {
            DB::table('items')->insert([
                'name' => $item,
            ]);
        }
    }
}
