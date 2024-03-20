@extends('layout.layout')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                <th scope="col">Position</th>
                <th scope="col">Shift</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody class="align-middle">
            <tr>
                <th scope="row">{{ $employee->id }}</th>
                @if ($editting ?? false)
                    <form action="{{ route('employee.update', $employee->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <td>
                            <input type="text" placeholder="First Name" name="first_name" class="form-control w-50 "
                                value="{{ $employee->first_name }}">
                            @error('first_name')
                                <span class="d-block fs-6 text-danger">{{ $message }}</span>
                            @enderror
                        </td>
                        <td>
                            <input type="text" placeholder="Last Name" name="last_name" class="form-control w-75 "
                                value="{{ $employee->last_name }}">
                            @error('last_name')
                                <span class="d-block fs-6 text-danger">{{ $message }}</span>
                            @enderror
                        </td>
                        <td>
                            <input type="numeric" placeholder="Phone" name="phone" value="{{ $employee->phone }}"
                                class="form-control w-75 ">
                            @error('phone')
                                <span class="d-block fs-6 text-danger">{{ $message }}</span>
                            @enderror
                        </td>
                        <td>
                            <input type="text" placeholder="Email" name="email" class="form-control w-100 "
                                value="{{ $employee->email }}">
                            @error('email')
                                <span class="d-block fs-6 text-danger">{{ $message }}</span>
                            @enderror
                        </td>
                        <td>
                            <select name="position" id="position" class="form-control w-75 ">
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
                        <td>
                            <select name="shift" id="shift" class="form-control w-75 ">
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

                        <td>
                            <button type="submit" class="btn btn-sm btn-success">Update</button>
                        </td>
                    </form>
                @else
                    <td>{{ $employee->first_name }}</td>
                    <td>{{ $employee->last_name }}</td>
                    <td>{{ $employee->phone }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ (new App\Models\Position())->getPosition($employee->position_id) }}</td>
                    <td>{{ (new App\Models\Shift())->getShift($employee->shift_id) }}</td>
                    <td>
                        <div class="d-flex">
                            @include('employee.edit_employee')
                            @include('employee.delete_employee')
                        </div>
                    </td>
                @endif
            </tr>
        </tbody>
    </table>
@endsection

<script>
    // JavaScript to update form action URL based on selected position and shift
    document.getElementById('position').addEventListener('change', function() {
        updateFormAction();
    });

    document.getElementById('shift').addEventListener('change', function() {
        updateFormAction();
    });

    function updateFormAction() {
        var positionId = document.getElementById('position').value;
        var shiftId = document.getElementById('shift').value;
        var formAction = "{{ route('employee.store', ['position' => ':position', 'shift' => ':shift']) }}";
        formAction = formAction.replace(':position', positionId).replace(':shift', shiftId);
        document.getElementById('createEmployeeForm').setAttribute('action', formAction);
    }
</script>
