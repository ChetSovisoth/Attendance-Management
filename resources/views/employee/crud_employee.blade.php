@extends('layout.layout')

@section('content')
    <div class="d-flex">
        <div class="w-100">
            @include('employee.create_employee')
        </div>
        <div class="w-50">
            @include('shared.search-bar')
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col" class="text-center">#</th>
                <th scope="col" class="text-center">Name</th>
                <th scope="col" class="text-center">Phone</th>
                <th scope="col" class="text-center">Email</th>
                <th scope="col" class="text-center">Position</th>
                <th scope="col" class="text-center">Shift</th>
                <th scope="col" class="text-center">Others</th>
                <th scope="col" class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody class="align-middle">
            @foreach ($employees as $employee)
                <tr class="text-center">
                    <th scope="row">{{ $employee->id }}</th>
                    <td scope="row">{{ $employee->first_name . ' ' . $employee->last_name }}</td>
                    <td scope="row">{{ $employee->phone }}</td>
                    <td scope="row">{{ $employee->email }}</td>
                    <td scope="row">{{ (new App\Models\Position)->getPosition($employee->position_id) }}</td>
                    <td scope="row">{{ (new App\Models\Shift)->getShift($employee->shift_id) }}</td>
                    <td scope="row">{{ $employee->others }}</td>
                    <td scope="row">
                        <div class="d-flex align-items-center justify-content-center">
                            @include('employee.edit_employee')
                            @include('employee.delete_employee')
                            @include('employee.reset_password')
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $employees->links() }}
@endsection


