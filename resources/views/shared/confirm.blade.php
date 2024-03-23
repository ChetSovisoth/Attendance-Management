@extends('layout.layout')

@section('content')
    <div class="container">
        <h2>Confirm Delete</h2>
        <p>Are you sure you want to delete this item?</p>
        <form method="POST" action="">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Yes, Delete</button>
            <a href="" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
