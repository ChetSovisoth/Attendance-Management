<form action="{{ route('crud.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <input type="text" placeholder="Emp. Name" name="emp-name" class="d-block w-50 mt-3 ">
        <input type="text" placeholder="Emp. Email" name="emp-email" class="d-block w-50 mt-3   ">
        <input type="text" placeholder="Emp. Password" name="emp-password" class="d-block w-50 mt-3 ">
    </div>
    <div class="my-3">
        @error('emp-name')
            <span class="d-block fs-6 text-danger">{{ $message }}</span>
        @enderror
        @error('emp-email')
            <span class="d-block fs-6 text-danger">{{ $message }}</span>
        @enderror
        @error('emp-password')
            <span class="d-block fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="">
        <button class="btn btn-dark" type='submit'> Create </button>
    </div>
</form>         
