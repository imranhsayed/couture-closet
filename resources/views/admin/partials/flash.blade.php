@if (session('admin.success'))
    <div class="alert alert-success" role="alert">
        {{ session('admin.success') }}
    </div>
@endif

@if (session('admin.error'))
    <div class="alert alert-danger" role="alert">
        {{ session('admin.error') }}
    </div>
@endif

@if (session('admin.warning'))
    <div class="alert alert-warning text-dark" role="alert">
        {{ session('admin.warning') }}
    </div>
@endif
