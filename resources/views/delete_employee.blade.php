<form action="{{ route('crud.destroy', $employee->id) }}" method="POST">
    @csrf
    @method('delete')
    <button class="btn btn-danger btn-sm">Delete</button>
</form>