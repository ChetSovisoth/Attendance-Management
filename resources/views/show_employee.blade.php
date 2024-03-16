@extends('layout.layout')

@section('content')
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
            <tr>
                <th scope="row">{{ $employee->id }}</th>
                @if ($editting ?? false)
                    <form action="{{ route('crud.update', $employee->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <td>
                            <input type="text" placeholder="Emp. Name" name="emp-name" class="form-control w-75 "
                                value="{{ $employee->name }}">
                            @error('emp-name')
                                <span class="d-block fs-6 text-danger">{{ $message }}</span>
                            @enderror
                        </td>
                        <td>
                            <input type="text" placeholder="Emp. Email" name="emp-email" class="form-control w-75 "
                                value="{{ $employee->email }}">
                            @error('emp-email')
                                <span class="d-block fs-6 text-danger">{{ $message }}</span>
                            @enderror
                        </td>
                        <td>
                            <input type="text" placeholder="Emp. Password" name="emp-password" class="form-control w-75 "
                                value="{{ $employee->password }}">
                            @error('emp-password')
                                <span class="d-block fs-6 text-danger">{{ $message }}</span>
                            @enderror
                        </td>
                        <td>
                            <button type="submit" class="btn btn-success">Update</button>
                        </td>
                    </form>
                @else
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->password }}</td>
                    <td>
                        <div class="d-flex">
                            @include('edit_employee')
                            @include('delete_employee')
                        </div>
                    </td>
                @endif
            </tr>
        </tbody>
    </table>
@endsection
