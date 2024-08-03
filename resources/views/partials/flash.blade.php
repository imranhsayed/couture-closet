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
