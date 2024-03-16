<div class="d-flex justify-content-center align-items-center">
    @if (session()->has('danger'))
        <div class="alert alert-danger alert-dismissible fade show w-75 text-center" role="alert">
            {{ session('danger') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
</div>
