@extends('layout.layout')

@section('content')
    <table class="table">
        <thead>
            <tr class="text-center">
                <th scope="col">#</th>
                <th scope="col">Shift Name</th>
                <th scope="col">Start Time</th>
                <th scope="col">End Time</th>
                <th scope="col">Late Policy</th>
            </tr>
        </thead>
        <tbody class="align-middle">
            @foreach ((new App\Models\Shift())->getShiftTable() as $shift)
                <tr class="text-center">
                    <th scope="row">{{ $shift->id }}</th>
                    <td scope="row">{{ $shift->shift_name }}</td>
                    <td scope="row">{{ $shift->shift_start_time }}</td>
                    <td scope="row">{{ $shift->shift_end_time }}</td>
                    <td scope="row">{{ $shift->late_policy }}</td>
                </tr>
            @endforeach
        </tbody>    
    </table>
@endsection