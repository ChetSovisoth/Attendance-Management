@extends('layout.layout')

@section('content')
    <table class="table">
        <thead>
            <tr class="text-center">
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                <th scope="col">Position</th>
                <th scope="col">Shift</th>
                <th scope="col">Others</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody class="align-middle">
            <tr class="text-center">
                <th scope="row">{{ $employee->id }}</th>
                @if ($editting ?? false)
                    <form action="{{ route('employee.update', $employee->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <td class="align-middle">
                            <input type="text" placeholder="First Name" name="first_name" class="form-control w-50 mx-auto"
                                value="{{ $employee->first_name }}">
                            @error('first_name')
                                <span class="d-block fs-6 text-danger">{{ $message }}</span>
                            @enderror
                        </td>
                        <td class="align-middle">
                            <input type="text" placeholder="Last Name" name="last_name" class="form-control w-75 mx-auto"
                                value="{{ $employee->last_name }}">
                            @error('last_name')
                                <span class="d-block fs-6 text-danger">{{ $message }}</span>
                            @enderror
                        </td>
                        <td class="align-middle">
                            <input type="numeric" placeholder="Phone" name="phone" class="form-control w-75 mx-auto"
                                value="{{ $employee->phone }}">
                            @error('phone')
                                <span class="d-block fs-6 text-danger">{{ $message }}</span>
                            @enderror
                        </td>
                        <td class="align-middle">
                            <input type="text" placeholder="Email" name="email" class="form-control w-100 mx-auto"
                                value="{{ $employee->email }}">
                            @error('email')
                                <span class="d-block fs-6 text-danger">{{ $message }}</span>
                            @enderror
                        </td>
                        <td class="align-middle">
                            <select name="position" id="position" class="form-control w-75 mx-auto">
                                <option value="{{ $employee->position_id }}">
                                    {{ (new App\Models\Position())->getPosition($employee->position_id) }}</option>
                                @foreach ($positions as $position)
                                    @if ($employee->position_id != $position->id)
                                        <option value="{{ $position->id }}">{{ $position->position_title }}</option>
                                    @endif
                                @endforeach
                            </select>

                            @error('position')
                                <span class="d-block fs-6 text-danger">{{ $message }}</span>
                            @enderror
                        </td>
                        <td class="align-middle">
                            <select name="shift" id="shift" class="form-control w-75 mx-auto">
                                <option value="{{ $employee->shift_id }}">
                                    {{ (new App\Models\Shift())->getShift($employee->shift_id) }}</option>
                                @foreach ($shifts as $shift)
                                    @if ($employee->shift_id != $shift->id)
                                        <option value="{{ $shift->id }}">
                                            {{ $shift->shift_name . ': ' . $shift->shift_start_time . ' - ' . $shift->shift_end_time }}
                                        </option>
                                    @endif
                                @endforeach
                            </select>
                            @error('shift')
                                <span class="d-block fs-6 text-danger">{{ $message }}</span>
                            @enderror
                        </td>

                        <td class="align-middle">
                            <input type="text" placeholder="Others" name="others" class="form-control w-75 mx-auto"
                             value="{{ $employee->others }}">
                            @error('others')
                                <span class="d-block fs-6 text-danger">{{ $message }}</span>
                            @enderror
                        </td>

                        <td class="align-middle">
                            <button type="submit" class="btn btn-sm btn-success mx-auto">Update</button>
                        </td>
                    </form>
                @else
                    <td scope="row">{{ $employee->first_name }}</td>
                    <td scope="row">{{ $employee->last_name }}</td>
                    <td scope="row">{{ $employee->phone }}</td>
                    <td scope="row">{{ $employee->email }}</td>
                    <td scope="row">{{ (new App\Models\Position())->getPosition($employee->position_id) }}</td>
                    <td scope="row">{{ (new App\Models\Shift())->getShift($employee->shift_id) }}</td>
                    <td scope="row">{{ $employee->others }}</td>
                    <td scope="row">
                        <div class="d-flex align-content-center justify-content-center">
                            @include('employee.edit_employee')
                            @include('employee.delete_employee')
                        </div>
                    </td>
                @endif
            </tr>
        </tbody>
    </table>
@endsection
