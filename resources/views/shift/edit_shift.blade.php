<form action="{{ route('shifts.edit', $shift->id) }}" method="GET" class="m-0">
    @csrf
    @method('GET')
    <button class="btn btn-secondary btn-sm">Edit</button>
</form>
