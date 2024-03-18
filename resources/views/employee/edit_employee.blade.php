<form action="{{ route('employee.edit', $employee->id) }}" method="get">
    @csrf
    @method('get')
    <button class="btn btn-secondary btn-sm">Edit</button>
</form>