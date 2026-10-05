@extends('layouts.app')

@section('title', 'Laravel Migration Portal')

@section('content')
    <div class="card">
        <h2>Web Development 3 - Laravel Exercises</h2>
        <p class="muted">Select an activity below to view the migrated Laravel module:</p>
        <ul class="link-list">
            <li><a href="{{ url('/dashboard') }}">1. Student Dashboard View</a></li>
            <li><a href="{{ url('/form') }}">2. Student Profile Card Generator (POST Form)</a></li>
        </ul>
    </div>
@endsection
