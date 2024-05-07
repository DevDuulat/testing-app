@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">Course List</div>
        <div class="card-body">
            <a href="{{ route('courses.create') }}" class="btn btn-primary mb-3">Add New Course</a>

            @if ($courses->isEmpty())
                <p>No courses found.</p>
            @else
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($courses as $course)
                            <tr>
                                <td>{{ $course->title }}</td>
                                <td>{{ $course->description }}</td>
                                <td>
                                    <a href="{{ route('courses.show', $course) }}" class="btn btn-primary">View</a>
                                    <a href="{{ route('courses.edit', $course) }}" class="btn btn-secondary">Edit</a>
                                    <form action="{{ route('courses.destroy', $course) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this course?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
@endsection
