@extends('layouts.app')

@section('title', 'Student Dashboard')

@section('content')
    <div class="container">
        <h1>Welcome back, {{ $studentName }}!</h1>
        <p><strong>Student ID:</strong> {{ $studentId }}</p>
        <p><strong>Current GPA:</strong> {{ $gpa }}</p>

        <h3>Enrolled Subjects:</h3>
        <ul>
            @foreach($subjects as $sub)
                <li>{{ $sub }}</li>
            @endforeach
        </ul>
    </div>
@endsection
