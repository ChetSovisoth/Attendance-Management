@extends('layout.layout')

@section('content')
    @include('position.create_position')
    <table class="table">
        <thead>
            <tr class="text-center">
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody class="align-middle">
            @foreach ((new App\Models\Position())->paginate(10) as $position)
                <tr class="text-center">
                    <th scope="row">{{ $position->id }}</th>
                    <td scope="row">{{ $position->position_title }}</td>
                    <td scope="row">
                        <div class="d-flex align-items-center justify-content-center">
                            @include('position.edit_position')
                            @include('position.delete_position')
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ (new App\Models\Position())->paginate(10)->links() }} 
@endsection
