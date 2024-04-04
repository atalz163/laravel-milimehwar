<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('items')->insert([
            'name' => 'News'
        ]);
        DB::table('items')->insert([
            'name' => 'Announcements '
        ]);
        DB::table('items')->insert([
            'name' => 'Reports '
        ]);
        DB::table('items')->insert([
            'name' => 'Messages '
        ]);
        DB::table('items')->insert([
            'name' => 'Articles '
        ]);
        DB::table('items')->insert([
            'name' => 'Statements '
        ]);
        DB::table('items')->insert([
            'name' => 'Interviews'
        ]);
        DB::table('items')->insert([
            'name' => 'Team Members Biography'
        ]);
        DB::table('items')->insert([
            'name' => 'Services'
        ]);
        DB::table('items')->insert([
            'name' => 'Book Clubs'
        ]);
        DB::table('items')->insert([
            'name' => 'Carousel'
        ]);
        DB::table('items')->insert([
            'name' => 'Why Us'
        ]);
        DB::table('items')->insert([
            'name' => 'Our Story'
        ]);
        DB::table('items')->insert([
            'name' => 'Quick Links'
        ]);
        DB::table('items')->insert([
            'name' => 'Vision'
        ]);
    }
}
