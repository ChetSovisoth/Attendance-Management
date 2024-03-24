<form action="{{ route('employees.destroy', $employee->id) }}" method="POST" class="m-0">
    @csrf
    @method('delete')
    <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this employee?')">Delete</button>
</form>