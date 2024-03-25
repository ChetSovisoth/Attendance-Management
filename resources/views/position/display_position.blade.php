@extends('layout.layout')

@section('content')
    <table class="table">
        <thead>
            <tr class="text-center">
                <th scope="col">#</th>
                <th scope="col">Title</th>
            </tr>
        </thead>
        <tbody class="align-middle">
            @foreach ((new App\Models\Position())->getPositionTable() as $position)
                <tr class="text-center">
                    <th scope="row">{{ $position->id }}</th>
                    <td scope="row">{{ $position->position_title }}</td>
                </tr>
            @endforeach
        </tbody>    
    </table>
@endsection