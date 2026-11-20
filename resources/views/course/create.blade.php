
<x-layout title="Create Course">

    <h1>Create Course</h1>

    <form action="{{ route('courses.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name"
                   value="{{ old('name') }}" required>
            @error('name')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea id="description" name="description">{{ old('description') }}</textarea>
            @error('description')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="duration">Duration (weeks)</label>
            <input type="number" id="duration" name="duration"
                   min="1" value="{{ old('duration') }}" required>
            @error('duration')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="fee">Fee</label>
            <input type="number" id="fee" name="fee"
                   step="0.01" min="0" value="{{ old('fee') }}" required>
            @error('fee')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="difficulty">Difficulty</label>
            <select id="difficulty" name="difficulty" required>
                <option value="">-- Select --</option>
                @foreach(['Easy', 'Medium', 'Hard'] as $level)
                    <option value="{{ $level }}"
                        @selected(old('difficulty') == $level)>
                        {{ $level }}
                    </option>
                @endforeach
            </select>
            @error('difficulty')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <input type="hidden" name="is_active" value="0">

            <label>
                <input type="checkbox" name="is_active" value="1"
                       @checked(old('is_active', true))>
                Active
            </label>
        </div>

        <button type="submit" class="btn">
            Create Course
        </button>

        <a href="{{ route('courses.index') }}">
            Cancel
        </a>

    </form>

</x-layout>
