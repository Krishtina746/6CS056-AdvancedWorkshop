
@props(['student'])

<div class="form-group">
    <label for="name">Name</label>
    <input type="text" id="name" name="name"
           value="{{ old('name', $student->name) }}" required>
    @error('name')
        <p class="error">{{ $message }}</p>
    @enderror
</div>

<div class="form-group">
    <label for="email">Email</label>
    <input type="email" id="email" name="email"
           value="{{ old('email', $student->email) }}" required>
    @error('email')
        <p class="error">{{ $message }}</p>
    @enderror
</div>

<div class="form-group">
    <label for="phone">Phone</label>
    <input type="text" id="phone" name="phone"
           value="{{ old('phone', $student->phone) }}" required>
    @error('phone')
        <p class="error">{{ $message }}</p>
    @enderror
</div>

<div class="form-group">
    <label for="address">Address</label>
    <textarea id="address" name="address">{{ old('address', $student->address) }}</textarea>
    @error('address')
        <p class="error">{{ $message }}</p>
    @enderror
</div>

<div class="form-group">
    <label for="date_of_birth">Date of Birth</label>
    <input type="date" id="date_of_birth" name="date_of_birth"
           value="{{ old('date_of_birth', $student->date_of_birth?->format('Y-m-d')) }}">
    @error('date_of_birth')
        <p class="error">{{ $message }}</p>
    @enderror
</div>
