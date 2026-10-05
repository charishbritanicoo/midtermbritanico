@extends('layouts.app')

@section('title', 'Student Profile Card Generator')

@section('content')
    <div class="card">
        <h2>Student Profile Card Generator</h2>
        <p class="muted">Fill in your details to generate your profile card.</p>

        <form action="{{ url('/display') }}" method="POST">
            @csrf

            <div class="field">
                <label for="fullname">Full Name</label>
                <input type="text" id="fullname" name="fullname" required>
            </div>

            <div class="field">
                <label for="age">Age</label>
                <input type="number" id="age" name="age" min="1" required>
            </div>

            <div class="field">
                <label for="course">Course / Program</label>
                <input type="text" id="course" name="course" required>
            </div>

            <div class="field">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="field">
                <label for="motto">Favorite Motto / Bio</label>
                <textarea id="motto" name="motto" rows="4"></textarea>
            </div>

            <button type="submit">Generate Profile</button>
        </form>
    </div>
@endsection
