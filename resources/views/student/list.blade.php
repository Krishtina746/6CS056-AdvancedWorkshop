
<x-layout title="Students">

    <h1>Students</h1>

    <a href="{{ route('students.create') }}" class="btn">
        Create Student
    </a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @forelse($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->phone }}</td>

                    <td>
                        <a href="{{ route('students.show', $student) }}">View</a>

                        <a href="{{ route('students.edit', $student) }}">Edit</a>

                        <form action="{{ route('students.destroy', $student) }}"
                              method="POST"
                              class="inline-form">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No students found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</x-layout>
