<form action="{{ route('employee.reset', $employee->id) }}" method="POST" class="m-0">
    @csrf
    @method('PUT')
    <button class="btn btn-warning btn-sm">Reset</button>
</form>