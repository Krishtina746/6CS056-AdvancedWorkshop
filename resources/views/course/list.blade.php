
<x-layout title="Courses">

    <h1>Courses</h1>

    <a href="{{ route('courses.create') }}" class="btn">
        Create Course
    </a>

    <a href="{{ route('students.index') }}">
        Go to Students
    </a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Duration (weeks)</th>
                <th>Fee</th>
                <th>Difficulty</th>
                <th>Active</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @forelse($courses as $course)
                <tr>
                    <td>{{ $course->id }}</td>
                    <td>{{ $course->name }}</td>
                    <td>{{ $course->duration }}</td>
                    <td>{{ $course->fee }}</td>
                    <td>{{ $course->difficulty }}</td>
                    <td>{{ $course->is_active ? 'Yes' : 'No' }}</td>

                    <td>
                        <a href="{{ route('courses.show', $course) }}">
                            View
                        </a>

                        <a href="{{ route('courses.edit', $course) }}">
                            Edit
                        </a>

                        <form action="{{ route('courses.destroy', $course) }}"
                              method="POST"
                              class="inline-form"
                              onsubmit="return confirm('Are you sure you want to delete this course?')">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">No courses found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</x-layout>
