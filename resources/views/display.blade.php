@extends('layouts.app')

@section('title', 'Student Profile Result')

@section('content')
    <div class="profile-card">
        <h3>Student ID Card</h3>
        <p><strong>Name:</strong> {{ $fullname }}</p>
        <p><strong>Age:</strong> {{ $age }} years old</p>
        <p><strong>Course:</strong> {{ $course }}</p>
        <p><strong>Email:</strong> {{ $email }}</p>
        <p><strong>Motto:</strong> <em>"{{ $motto }}"</em></p>
    </div>

    <a href="{{ url('/form') }}">&larr; Back to Registration Form</a>
@endsection
