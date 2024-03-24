@extends('layout.layout')

@section('content')
    <div class="d-flex flex-column">
        <div class="w-25">
            @include('shared.search-bar')
        </div>
        <div class="align-self-end">
            <form action="{{ route('employee.filter') }}" method="GET">
                <div class="mb-3 d-inline-block me-3">
                    <label for="position">Position:</label>
                    <select name="position_id" id="position" class="form-select">
                        <option value="">All Positions</option>
                        @foreach ((new App\Models\Position)->getPositionTable() as $position)
                        <option value="{{ $position->id }}">{{ $position->position_title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3 d-inline-block me-3">
                    <label for="shift">Shift:</label>
                    <select name="shift_id" id="shift" class="form-select">
                        <option value="">All Shifts</option>
                        @foreach ((new App\Models\Shift)->getShiftTable() as $shift)
                        <option value="{{ $shift->id }}">{{ $shift->shift_name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Filter</button>
            </form>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr class="text-center">
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                <th scope="col">Position</th>
                <th scope="col">Shift</th>
                <th scope="col">Others</th>
            </tr>
        </thead>
        <tbody class="align-middle">
            @php
                $employeesToDisplay = $employees ?? (new App\Models\Employee())->paginate(10);
            @endphp
        
            @foreach ($employeesToDisplay as $employee)
                <tr class="text-center">
                    <th scope="row">{{ $employee->id }}</th>
                    <td scope="row">{{ $employee->first_name . ' ' . $employee->last_name }}</td>
                    <td scope="row">{{ $employee->phone }}</td>
                    <td scope="row">{{ $employee->email }}</td>
                    <td scope="row">{{ (new App\Models\Position())->getPosition($employee->position_id) }}</td>
                    <td scope="row">{{ (new App\Models\Shift())->getShift($employee->shift_id) }}</td>
                    <td scope="row">{{ $employee->others }}</td>
                </tr>
            @endforeach
        </tbody>    
    </table>
    @isset($employees)
        {{ $employees->links() }}
    @else
        {{ $employeesToDisplay->links() }}
    @endisset
@endsection
