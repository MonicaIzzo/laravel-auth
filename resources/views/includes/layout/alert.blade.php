@if (sessione('message'))
    <div class="alert alert-info- {{ sessione('type') ?? 'info' }} alert-dismissible fade show" role="alert">
        {{ session('message') }}
        <button type="button" class="btn-close" data-bs-dismiss='alert' arial-label='Close'></button>
    </div>
