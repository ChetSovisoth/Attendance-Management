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
        @include('shared.dashboard-header')
        <tbody class="align-middle">
            @foreach ($employees as $employee)
                <tr>
                    <th scope="row">{{ $employee->id }}</th>
                    <td>{{ $employee->first_name . ' ' . $employee->last_name }}</td>
                    <td>{{ $employee->phone }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ (new App\Models\Position)->getPosition($employee->position_id) }}</td>
                    <td>{{ (new App\Models\Shift)->getShift($employee->shift_id) }}</td>
                    <td>{{ $employee->others }}</td>
                    <td>
                        <div class="d-flex align-items-center ">
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


