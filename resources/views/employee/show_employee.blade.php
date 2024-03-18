@extends('layout.layout')

@section('content')
    <table class="table">
        @include('shared.dashboard-header')
        <tbody class="align-middle">
            <tr>
                <th scope="row">{{ $employee->id }}</th>
                @if ($editting ?? false)
                    <form action="{{ route('employee.update', $employee->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <td>
                            <input type="text" placeholder="Name" name="name" class="form-control w-75 "
                                value="{{ $employee->name }}">
                            @error('name')
                                <span class="d-block fs-6 text-danger">{{ $message }}</span>
                            @enderror
                        </td>
                        <td>
                            <input type="text" placeholder="Email" name="email" class="form-control w-75 "
                                value="{{ $employee->email }}">
                            @error('email')
                                <span class="d-block fs-6 text-danger">{{ $message }}</span>
                            @enderror
                        </td>
                        <td>
                            <input type="text" placeholder="Password" name="password" class="form-control w-75 "
                                value="{{ $employee->password }}">
                            @error('password')
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
                            @include('employee.edit_employee')
                            @include('employee.delete_employee')
                        </div>
                    </td>
                @endif
            </tr>
        </tbody>
    </table>
@endsection
