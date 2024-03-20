<form action="{{ route('employee.store') }}" method="POST"
    id="createEmployeeForm">
    @csrf
    @method('POST')

    <div class="mb-3">
        <input type="text" placeholder="First Name" name="first_name" class="d-block w-50 mt-3">
        @error('first_name')
            <span class="d-block fs-6 text-danger">{{ $message }}</span>
        @enderror

        <input type="text" placeholder="Last Name" name="last_name" class="d-block w-50 mt-3">
        @error('last_name')
            <span class="d-block fs-6 text-danger">{{ $message }}</span>
        @enderror

        <input type="numeric" placeholder="Phone" name="phone" value="0" class="d-block w-50 mt-3">
        @error('phone')
            <span class="d-block fs-6 text-danger">{{ $message }}</span>
        @enderror

        <label for="shift" class="d-block w-50 mt-3">Choose a shift:</label>
        <select name="shift" id="shift" class="d-block w-50 mt-3">
            <option>Select a shift</option>
            @foreach ($shifts as $shift)
                <option value="{{ $shift->id }}">{{ $shift->shift_name . ': ' . $shift->shift_start_time . ' - ' . $shift->shift_end_time }}</option>
            @endforeach
        </select>
        @error('shift')
            <span class="d-block fs-6 text-danger">{{ $message }}</span>
        @enderror

        <label for="position" class="d-block w-50 mt-3">Choose a position:</label>
        <select name="position" id="position" class="d-block w-50 mt-3">
            <option>Select a position</option>
            @foreach ($positions as $position)
                <option value="{{ $position->id }}">{{ $position->position_title }}</option>
            @endforeach
        </select>
        @error('position')
            <span class="d-block fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div>
        <button class="btn btn-dark" type="submit">Create</button>
    </div>
</form>