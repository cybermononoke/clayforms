<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JournalPromptsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $prompts = [
            'write about the worst nightmare you had',
            'what is the first song you remember hearing as a child?',
            'write about a book you enjoyed',
            'reflect on your first memory of eating fish',
            'write a letter to your past self',
            // Add more prompts as needed
        ];

        foreach ($prompts as $prompt) {
            DB::table('journal_prompts')->insert([
                'prompt' => $prompt,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
