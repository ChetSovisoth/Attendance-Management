<form action="{{ route('employees.edit', $employee->id) }}" method="GET" class="m-0">
    @csrf
    @method('GET')
    <button class="btn btn-secondary btn-sm">Edit</button>
</form>
