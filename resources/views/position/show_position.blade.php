@extends('layout.layout')

@section('content')
    <table class="table">
        <thead>
            <tr class="text-center">
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody class="align-middle">
            <tr class="text-center">
                <th scope="row">{{ $position->id }}</th>
                @if ($editting ?? false)
                    <form action="{{ route('positions.update', $position->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <td class="align-middle">
                            <input type="text" placeholder="position_title" name="position_title" class="form-control w-50 mx-auto" 
                                value="{{ $position->position_title }}">
                            @error('position_title')
                                <span class="d-block fs-6 text-danger">{{ $message }}</span>
                            @enderror
                        </td>
            
                        <td class="align-middle">
                            <button type="submit" class="btn btn-sm btn-success">Update</button>
                        </td>
                    </form>
                @else
                    <td scope="row">{{ $position->position_title }}</td>
                    <td scope="row">
                        <div class="d-flex align-content-center justify-content-center">
                            @include('position.edit_position')
                            @include('position.delete_position')
                        </div>
                    </td>
                @endif
            </tr>
            
        </tbody>
    </table>
@endsection
