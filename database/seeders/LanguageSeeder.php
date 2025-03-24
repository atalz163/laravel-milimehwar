<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $languages = [
            ['code' => 'en', 'name' => 'English', 'rtl' => 0],
            ['code' => 'ps', 'name' => 'Pashto', 'rtl' => 1],
            ['code' => 'dr', 'name' => 'Dari', 'rtl' => 1],
        ];

        foreach ($languages as $language) {
            DB::table('languages')->insert([
                'code' => $language['code'],
                'name' => $language['name'],
                'rtl' => $language['rtl'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}