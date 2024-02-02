<?php

namespace App\Http\Controllers;

use App\Models\Journal;
use Illuminate\Http\Request;

class JournalController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $journals = Journal::where('user_id', $user->id)
            ->with('user')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('journals.index', compact('journals'));
    }

    public function create()
    {
        return view('journals.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        // Associate the created journal with the authenticated user
        $user = auth()->user();
        $journal = new Journal($validatedData);
        $journal->user()->associate($user);

        $journal->save();

        return redirect()->route('journals.index')
            ->with('success', 'Journal entry created successfully!');
    }

    public function show($id)
    {
        $journal = Journal::findOrFail($id);

        return view('journals.show', compact('journal'));
    }

    public function edit($id)
    {
        $journal = Journal::findOrFail($id);

        return view('journals.edit', compact('journal'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        Journal::whereId($id)->update($validatedData);

        return redirect()->route('journals.index')
            ->with('success', 'Journal entry updated successfully!');
    }

    public function destroy($id)
    {
        $journal = Journal::findOrFail($id);
        $journal->delete();

        return redirect()->route('journals.index')
            ->with('success', 'Journal entry deleted successfully!');
    }
}
