@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">Course Details</div>
        <div class="card-body">
            <h5 class="card-title">{{ $course->name }}</h5>
            <p class="card-text">Description: {{ $course->description }}</p>
            <p class="card-text">Date: {{ $course->date }}</p>
            <img src="{{ asset($course->image) }}" alt="Course Image" class="img-fluid">
            <a href="{{ route('courses.index') }}" class="btn btn-secondary mt-3">Back to Courses</a>
        </div>
    </div>
@endsection
