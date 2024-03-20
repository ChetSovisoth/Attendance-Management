<form action="{{ route('shift.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <input type="text" placeholder="Shift Name" name="shift_name" class="d-block w-75 mt-3 ">
        @error('shift_name')
            <span class="d-block fs-6 text-danger">{{ $message }}</span>
        @enderror

        <label for="shift_start_time" class="d-block w-75 my-1">Start Time</label>
        <input type="time" name="shift_start_time" class="d-block w-75">
        @error('shift_start_time')
            <span class="d-block fs-6 text-danger">{{ $message }}</span>
        @enderror

        <label for="shift_end_time" class="d-block w-75 my-1">End Time</label>
        <input type="time" name="shift_end_time" class="d-block w-75">
        @error('shift_end_time')
            <span class="d-block fs-6 text-danger">{{ $message }}</span>
        @enderror

        <label for="late_policy" class="d-block w-75 my-1">Late Policy</label>
        <input type="number" name="late_policy" class="d-block w-75" placeholder="Late Policy in Minute">
        @error('late_policy')
            <span class="d-block fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div>
        <button class="btn btn-dark" type='submit'> Create </button>
    </div>
</form>         
