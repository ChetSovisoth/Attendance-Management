@extends('layout.layout') 

@section('content')
<div class="d-flex">

    <div class="w-75">
        @include('shift.create_shift')
        
    </div>
    <div class="w-75">
        @include('position.create_position')
        
    </div>
</div>
@endsection