<form action="{{ route('employee.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <input type="text" placeholder="Name" name="name" class="d-block w-50 mt-3 ">
        <input type="text" placeholder="Email" name="email" class="d-block w-50 mt-3   ">
        <input type="text" placeholder="Password" name="password" class="d-block w-50 mt-3 ">
    </div>
    <div class="my-3">
        @error('name')
            <span class="d-block fs-6 text-danger">{{ $message }}</span>
        @enderror
        @error('email')
            <span class="d-block fs-6 text-danger">{{ $message }}</span>
        @enderror
        @error('password')
            <span class="d-block fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="">
        <button class="btn btn-dark" type='submit'> Create </button>
    </div>
</form>         
