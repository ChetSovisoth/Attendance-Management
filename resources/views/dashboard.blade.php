@extends('layout.layout')

@section('content')
    <div class="d-flex flex-1 justify-content-end">
        <div class="w-25 ">
            @include('shared.search-bar')
        </div>
    </div>
    <table class="table">
        @include('shared.dashboard-header')
        <tbody class="align-middle">
            @foreach ($employees as $employee)
                <tr>
                    <th scope="row">{{ $employee->id }}</th>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->password }}</td>
                    <td>
                        <div class="d-flex">
                            <!--Edit-->
                            @include('employee.edit_employee')
                            @include('employee.delete_employee')
                            
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $employees->links() }}
@endsection
