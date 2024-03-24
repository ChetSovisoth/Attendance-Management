@extends('layout.layout')

@section('content')
    <table class="table">
        <thead>
            <tr class="text-center">
                <th scope="col">#</th>
                <th scope="col">Shift Name</th>
                <th scope="col">Start Time</th>
                <th scope="col">End Time</th>
                <th scope="col">Late Policy</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody class="align-middle">
            <tr class="text-center">
                <th scope="row">{{ $shift->id }}</th>
                @if ($editting ?? false)
                    <form action="{{ route('shifts.update', $shift->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <td class="align-middle">
                            <input type="text" placeholder="Shift Name" name="shift_name"
                                class="form-control w-50 mx-auto" value="{{ $shift->shift_name }}">
                            @error('shift_name')
                                <span class="d-block fs-6 text-danger">{{ $message }}</span>
                            @enderror
                        </td>

                        <td class="align-middle">
                            <input type="time" name="shift_start_time" class="form-control w-75 mx-auto" value="{{ $shift->shift_start_time }}">
                            @error('shift_start_time')
                                <span class="d-block fs-6 text-danger">{{ $message }}</span>
                            @enderror
                        </td>

                        <td class="align-middle">
                            <input type="time" name="shift_end_time" class="form-control w-75 mx-auto" value="{{ $shift->shift_end_time }}">
                            @error('shift_end_time')
                                <span class="d-block fs-6 text-danger">{{ $message }}</span>
                            @enderror
                        </td>

                        <td class="align-middle">
                            <input type="number" name="late_policy" class="form-control w-50 mx-auto"
                                placeholder="Late Policy in Minute" value="{{ $shift->late_policy }}">
                            @error('late_policy')
                                <span class="d-block fs-6 text-danger">{{ $message }}</span>
                            @enderror
                        </td>

                        <td class="align-middle">
                            <button type="submit" class="btn btn-sm btn-success">Update</button>
                        </td>
                    </form>
                @else
                    <td scope="row">{{ $shift->shift_start_time }}</td>
                    <td scope="row">{{ $shift->shift_end_time }}</td>
                    <td scope="row">{{ $shift->late_policy }}</td>
                    <td scope="row">
                        <div class="d-flex align-content-center justify-content-center">
                            @include('shift.edit_shift')
                            @include('shift.delete_shift')
                        </div>
                    </td>
                @endif
            </tr>
        </tbody>
    </table>
@endsection
