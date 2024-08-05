@if (session('user.success'))
    <div class="alert alert-success" role="alert">
        {{ session('user.success') }}
    </div>
@endif

@if (session('user.error'))
    <div class="alert alert-danger" role="alert">
        {{ session('user.error') }}
    </div>
@endif

@if (session('user.warning'))
    <div class="alert alert-warning text-dark" role="alert">
        {{ session('user.warning') }}
    </div>
@endif
