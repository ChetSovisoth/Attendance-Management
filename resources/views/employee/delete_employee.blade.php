<form action="{{ route('employee.destroy', $employee->id) }}" method="POST" class="m-0">
    @csrf
    @method('delete')
    <button class="btn btn-danger btn-sm">Delete</button>
</form>