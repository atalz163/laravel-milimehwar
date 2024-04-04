<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('languages')->insert([
            'code' => 'en',
            'name' => 'English',
            'rtl' => false
        ]);
        DB::table('languages')->insert([
            'code' => 'ps',
            'name' => 'Pashto',
            'rtl' => true
        ]);
        DB::table('languages')->insert([
            'code' => 'dr',
            'name' => 'Dari',
            'rtl' => true
        ]);
    }
}
