@extends('layouts.app')


<h2>{{ $journal->title }}</h2>
<p>{{ $journal->content }}</p>
<a href="{{ route('journals.edit', $journal->id) }}">Edit</a>
