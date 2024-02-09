<?php

namespace App\Http\Controllers;

use App\Models\JournalPrompt;

class JournalPromptController extends Controller
{
    public function getRandomPrompt()
    {
        $randomPrompt = JournalPrompt::inRandomOrder()->first();

        return view('random-prompt', compact('randomPrompt'));
    }
}
