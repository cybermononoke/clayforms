<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Inserting 10 dummy posts into the 'posts' table
        for ($i = 1; $i <= 10; $i++) {
            DB::table('posts')->insert([
                'title' => 'Post Title ' . $i,
                'content' => 'This is the content for post number ' . $i,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
