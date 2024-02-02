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
        // Define an array of sample prompts
        $prompts = [
            'What are three things you are grateful for today?',
            'Write about a time when you overcame a challenge.',
            'Describe your ideal day from start to finish.',
            'Reflect on a mistake you made and what you learned from it.',
            'Write a letter to your future self.',
            // Add more prompts as needed
        ];

        // Loop through each prompt and insert it into the database
        foreach ($prompts as $prompt) {
            DB::table('journal_prompts')->insert([
                'prompt' => $prompt,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
