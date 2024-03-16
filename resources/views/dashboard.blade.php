@extends('layout.layout')

@section('content')
    <div class="d-flex">
        <div class="w-75">
            @include('create_employee')
        </div>
        <div class="w-25">
            @include('search-bar')
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Emp. Name</th>
                <th scope="col">Emp. Email</th>
                <th scope="col">Emp. Password</th>
                <th scope="col">Actions</th> <!-- New column for actions -->
            </tr>
        </thead>
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
                            @include('edit_employee')
                            @include('delete_employee')
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $employees->links() }}
@endsection
